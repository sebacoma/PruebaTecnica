<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class ShippingQuoteService
{
    private Client $http;
    private string $base;

    public function __construct()
    {
        $this->base = rtrim(config('services.amplifica.base'), '/');
        $this->http = new Client(['base_uri' => $this->base, 'timeout' => 10]);
    }

    private function getToken(): string
    {
        return Cache::remember('amplifica_token', 55, function () {
            $resp = $this->http->post('/auth', [
                'json' => [
                    'username' => config('services.amplifica.username'),
                    'password' => config('services.amplifica.password'),
                ],
            ]);

            $data = json_decode((string) $resp->getBody(), true);
            return $data['token'] ?? '';
        });
    }

    private function authHeaders(): array
    {
        return ['Authorization' => 'Bearer ' . $this->getToken()];
    }

    private function requestWithAuth(string $method, string $uri, array $options = [])
    {
        try {
            $options['headers'] = ($options['headers'] ?? []) + $this->authHeaders();
            return $this->http->request($method, $uri, $options);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            if ($e->getResponse() && $e->getResponse()->getStatusCode() === 401) {
                Cache::forget('amplifica_token');
                $options['headers'] = ($options['headers'] ?? []) + $this->authHeaders();
                return $this->http->request($method, $uri, $options);
            }
            throw $e;
        }
    }

    public function regionalConfig(): array
    {
        $resp = $this->requestWithAuth('GET', '/regionalConfig');
        return json_decode((string) $resp->getBody(), true);
    }

    public function getRate(array $payload): array
    {
        $resp = $this->requestWithAuth('POST', '/getRate', ['json' => $payload]);
        return json_decode((string) $resp->getBody(), true);
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
    return [
        'cliente_nombre'=>'required|string|max:255',
        'fecha'=>'required|date',
        'detalles'=>'required|array|min:1',
        'detalles.*.product_id'=>'required|exists:products,id',
        'detalles.*.cantidad'=>'required|integer|min:1',
    ];
    }

}

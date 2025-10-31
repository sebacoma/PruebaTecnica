<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
    return ['nombre'=>'required|string|max:255','precio'=>'required|numeric|min:0',
            'peso'=>'required|numeric|min:0','ancho'=>'required|numeric|min:0',
            'alto'=>'required|numeric|min:0','largo'=>'required|numeric|min:0',
            'stock'=>'required|integer|min:0'];
    }

}

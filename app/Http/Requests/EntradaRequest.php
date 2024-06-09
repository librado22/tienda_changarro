<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntradaRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'id_producto' => 'required|exists:productos,id',
            'id_provedor' => 'required|exists:provedores,id',
            'cantidad_entradas' => 'required|integer|min:1',
            'precio_unitario' => 'required|numeric|min:0.01',
        ];
    }
}

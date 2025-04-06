<?php

namespace App\Http\Requests\Inventario;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        'name_product'=> 'required|string|max:255',
        'supplier_id'=> 'required',
        'stock'=> 'required',
        'unit_price'=> 'required',
        'image'=> 'required',
        'model'=> 'required|string|max:255'
        ];
    }
}

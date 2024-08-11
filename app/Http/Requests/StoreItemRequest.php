<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
                'name' => 'required',
                'price' => 'required',
                'stock' => 'required',
                'description' => 'required',
        ];
    }
    public function messages()
    {
        return[
           'name.required' => 'You have to add name!',
           'price.required' => 'You have to add price!',
           'stock.required' => 'You have to add stock',
           'description.required' => 'You have to add description'

        ];

    }

}

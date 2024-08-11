<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name'=>'required|string|max:10|min:5|unique:categories,name',
            'description'=>'required|string|max:20|min:10',
        ];
    }
    public function messages()
    {
        return[
            'name.required' => "You have to add name!",
            'description.required' => "You have to add description!",
        ];
    }
}

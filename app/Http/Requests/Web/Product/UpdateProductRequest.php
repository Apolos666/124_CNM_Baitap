<?php

namespace App\Http\Requests\Web\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255', // Name is required and should not exceed 255 characters
            'price' => 'required|numeric', // Price is required and should be a number
            'status' => 'required|in:0,1', // Status should be either 0 or 1
            'category_id' => 'required|exists:categories,id', // Category should exist in the categories table
        ];
    }
}
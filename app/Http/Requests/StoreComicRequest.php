<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|max:30',
            'series' => 'required|max:255',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => 'required|max:30',
            'artists' => 'required',
            'writers' => 'required'
        ];
    }

    public function messages(): array {
        return [
            'max' => 'Il campo :attribute deve avere massimo :max caratteri',
            'required' => 'Il campo :attribute non è stato inserito',
            'date_format' => 'Il campo :attribute deve essere nel formato YYYY-MM-DD',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'name'=>'required',
            'ISBN'=>'required',
            'pages'=>'required',
            'author'=>'required',
            // 'category'=>'required',
            'pages'=>'required',
            'year'=>'required',
        ];
        return $rules;
    }
    public function messages()
    {
        $messages = [
            'name.required' => 'name không được để trống',
            'ISBN.required' => 'ISBN không được để trống ',
            'pages.required' => 'pages không được để trống ',
            'author.required' => 'author không được để trống ',
            // 'category.required' => 'category không được để trống',
            'pages.required' => 'pages không được để trống',
            'year.required' => 'year không được để trống ',
        ];
        return $messages;
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|unique:books',
            'description' => 'required',
            'author_id' => 'required',
            //'author.name' => 'required',
            //'author.bio' => 'required',
            //'author.born_at' => 'required',
            'published_at' => 'required|date_format:Y-m-d H:i:s'
        ];
    }
}

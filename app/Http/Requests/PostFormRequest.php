<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
            // Moved here from PostareController
            // 'title' => 'required|max:50',
            // 'body' => 'required'
        ];
    }

    public function messages()
    {
        return [
            // Moved here from PostareController
            'title.required' => 'DONT FORGET THE TITLE',
            'body.required' => 'U FORGOT THE BODY'
        ];
    }
}

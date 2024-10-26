<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersStoreRequest extends FormRequest
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
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|unique:users|email:rfc,dns',
            'password' => ['required', 'confirmed'],
            'password_confirmation' => 'required',
            'created_at' => 'nullable'
        ];
    }
    
    public function messages()
    {
        return [
            'created_at' => 'The date cannot be blank'
        ];
    }
}

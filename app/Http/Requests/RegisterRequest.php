<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => "required|max:255|string",
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6|max:60',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.max' => 'O campo nome deve conter no máximo 255 caracteres',
            'name.string' => 'O campo nome deve ser uma string',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O campo email deve ser um email válido',
            'email.unique' => 'O email já está em uso',
            'password.required' => 'O campo senha é obrigatório',
            'password.confirmed' => 'As senhas não coincidem',
            'password.min' => 'A senha deve conter no mínimo 6 caracteres',
            'password.max' => 'A senha deve conter no máximo 60 caracteres',
        ];
    }
}

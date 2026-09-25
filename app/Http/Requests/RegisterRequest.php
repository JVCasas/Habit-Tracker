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
            'name' => 'required|max:255|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:60|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo é obrigatório',
            'name.max' => 'O nome deve ter no máximo 255 caracteres',
            'name.string' => 'O nome deve ser um texto valido',

            'email.required' => 'O campo de Email é obrigatório',
            'email.email' => 'O campo de Email deve ser um endereço válido',
            'email.unique' => 'O email já está em uso',

            'password.required' => 'O campo de senha é obrigatório',
            'password.min' => 'A senha deve ter no mínimo 6 caracteres',
            'password.max' => 'A senha deve ter no máximo 60 caracteres',
            'password.confirmed' => 'As senhas não correspondem'
        ];
    }

}

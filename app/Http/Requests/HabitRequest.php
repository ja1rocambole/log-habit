<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Override;

class HabitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
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
        ];
    }

    public function messages()
    {
        return[
            "name.required" => "O campo nome é obrigatório",
            "name.max" => "O campo nome deve conter no máximo 255 caracteres",
            "name.string" => "O campo deve ser do tipo string",
        ];
    }
}

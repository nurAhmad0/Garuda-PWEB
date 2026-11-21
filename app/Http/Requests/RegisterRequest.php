<?php

namespace App\Http\Requests;

use App\Models\User;
use Closure;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    protected function prepareForValidation(): void
    {
        $email = $this->input('email');
        if (is_string($email)) {
            $this->merge(['email' => strtolower(trim($email))]);
        }
    }

    public function rules(): array
    {
        return [
            'nama'  => ['bail', 'required', 'string', 'max:100'],
            'email' => ['bail', 'required', 'string', 'email:filter', 'max:100'],
            'password' => [
                'bail', 'required', 'string',
                function (string $attribute, mixed $value, Closure $fail): void {
                    if (strlen($value) < 6) {
                        $fail('Password minimal 6 karakter.');
                    } elseif (strlen($value) > 72) {
                        $fail('Password maksimal 72 karakter.');
                    }
                },
            ],
            'role' => ['bail', 'required', Rule::in(User::SELF_ROLES)],
        ];
    }
    public function messages(): array
    {
        return [
            'nama.required' => 'Nama wajib diisi (maksimal 100 karakter).',
            'nama.string'   => 'Nama wajib diisi (maksimal 100 karakter).',
            'nama.max'      => 'Nama wajib diisi (maksimal 100 karakter).',
            'email.required' => 'Format email tidak valid.',
            'email.string'   => 'Format email tidak valid.',
            'email.email'    => 'Format email tidak valid.',
            'email.max'      => 'Format email tidak valid.',
            'password.required' => 'Password minimal 6 karakter.',
            'password.string'   => 'Password minimal 6 karakter.',
            'role.required' => 'Peran tidak valid.',
            'role.in'       => 'Peran tidak valid.',
        ];
    }
}

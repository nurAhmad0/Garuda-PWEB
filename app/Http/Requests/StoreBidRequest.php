<?php

namespace App\Http\Requests;

use Closure;
use Illuminate\Foundation\Http\FormRequest;
class StoreBidRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'harga' => [
                'bail', 'required',
                function (string $attribute, mixed $value, Closure $fail): void {
                    $v = (string) $value;
                    if (! preg_match('/\A[0-9]{1,12}\z/', $v) || (int) $v < 1) {
                        $fail('Harga harus bilangan bulat positif yang wajar.');
                    }
                },
            ],
            'durasi' => [
                'bail', 'required',
                function (string $attribute, mixed $value, Closure $fail): void {
                    $v = (string) $value;
                    if (! preg_match('/\A[0-9]{1,12}\z/', $v) || (int) $v < 1 || (int) $v > 3650) {
                        $fail('Durasi harus 1 sampai 3650 hari.');
                    }
                },
            ],
            'proposal' => ['bail', 'required', 'string', 'max:5000'],
        ];
    }
    public function messages(): array
    {
        return [
            'harga.required'  => 'Harga harus bilangan bulat positif yang wajar.',
            'durasi.required' => 'Durasi harus 1 sampai 3650 hari.',
            'proposal.required' => 'Proposal wajib diisi (maksimal 5000 karakter).',
            'proposal.string'   => 'Proposal wajib diisi (maksimal 5000 karakter).',
            'proposal.max'      => 'Proposal wajib diisi (maksimal 5000 karakter).',
        ];
    }
}

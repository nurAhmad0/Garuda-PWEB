<?php

namespace App\Http\Requests;

use Closure;
use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'judul'     => ['bail', 'required', 'string', 'max:200'],
            'deskripsi' => ['bail', 'required', 'string', 'max:5000'],
            'kategori'  => ['bail', 'required', 'string', 'max:50'],
            'budget_min' => ['bail', 'required', 'regex:/\A[0-9]{1,12}\z/'],
            'budget_max' => [
                'bail', 'required', 'regex:/\A[0-9]{1,12}\z/',
                function (string $attribute, mixed $value, Closure $fail): void {
                    if ((int) $value < (int) $this->input('budget_min')) {
                        $fail('Budget tidak valid (maks harus >= min).');
                    }
                },
            ],
            'batas_lelang' => ['bail', 'required', 'date_format:Y-m-d', 'after_or_equal:today'],
        ];
    }
    public function messages(): array
    {
        return [
            'judul.required' => 'Judul wajib diisi (maksimal 200 karakter).',
            'judul.string'   => 'Judul wajib diisi (maksimal 200 karakter).',
            'judul.max'      => 'Judul wajib diisi (maksimal 200 karakter).',
            'deskripsi.required' => 'Deskripsi wajib diisi (maksimal 5000 karakter).',
            'deskripsi.string'   => 'Deskripsi wajib diisi (maksimal 5000 karakter).',
            'deskripsi.max'      => 'Deskripsi wajib diisi (maksimal 5000 karakter).',
            'kategori.required' => 'Kategori wajib diisi (maksimal 50 karakter).',
            'kategori.string'   => 'Kategori wajib diisi (maksimal 50 karakter).',
            'kategori.max'      => 'Kategori wajib diisi (maksimal 50 karakter).',
            'budget_min.required' => 'Budget harus berupa angka bulat tidak negatif.',
            'budget_min.regex'    => 'Budget harus berupa angka bulat tidak negatif.',
            'budget_max.required' => 'Budget harus berupa angka bulat tidak negatif.',
            'budget_max.regex'    => 'Budget harus berupa angka bulat tidak negatif.',
            'batas_lelang.required'        => 'Batas lelang harus tanggal yang valid dan belum lewat.',
            'batas_lelang.date_format'     => 'Batas lelang harus tanggal yang valid dan belum lewat.',
            'batas_lelang.after_or_equal'  => 'Batas lelang harus tanggal yang valid dan belum lewat.',
        ];
    }
}

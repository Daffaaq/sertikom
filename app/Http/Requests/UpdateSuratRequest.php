<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSuratRequest extends FormRequest
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
            'nomor_surat' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'file' => 'required|string',
            'waktu_arsip' => 'required|date',
            'kategori_surat_id' => 'required|exists:kategori_surats,id',
        ];
    }
}

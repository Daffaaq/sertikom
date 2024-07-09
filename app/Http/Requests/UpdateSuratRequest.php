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
            'file' => 'nullable|file|mimes:pdf|max:2048', // Validate as a file with specific mime types and size
            'kategori_surat_id' => 'required|exists:kategori_surats,id',
        ];
    }
}

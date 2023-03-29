<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class JadwalRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        
        return [
            'hari' => ['required'],
            'tanggal'=> ['required'],
            'kegiatan' => ['required'],

        ];
    }

    public function messages()
    {   
        return [
            'hari.required' => 'kalau gk ada hari tau dari mana bang',
            'required' => 'diisi bang, kalau kgk di isi gmn taunya',
        ];
    }
}

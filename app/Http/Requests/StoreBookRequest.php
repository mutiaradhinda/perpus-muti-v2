<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'bail|required|string|max:255',
            'tahun_terbit' => 'bail|required|string',
            'id_buku' => 'bail|required|string|max:255',
            'id_penulis' => 'bail|required|string|max:255',
            'id_penerbit' => 'bail|required|string|max:255',
            'id_kategori' => 'bail|required|string|max:255',
            'sinopsis' => 'bail|required|string|max:255',        

        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    //public function authorize()
    //{
    //    return false;
    //}

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //'nim' => 'required',
            'nim' => ['required', Rule::unique('mahasiswas')->ignore($this->id)],
            'nama' => 'required|min:5',
            'umur' => 'required|integer',
            'alamat' => 'required|min:5|max:150',
            'kota' => 'required|string|max:100',
            'jurusan' => 'required|string|max:50',
            'kelas' => 'required|max:3',

        ];

        // if($this->getMethod()=='PUT'){
        //     $rules += [
        //         'nim'=>[
        //             'required',
        //             Rule::unique('mahasiswas')->ignore($this->mahasiswa),
        //         ],
        //     ];
        // };

        // $rules = [
        //              'nim' => 'required',
        //     'nama' => 'required',
        //     'umur' => 'required',
        //     'alamat' => 'required',
        //     'kota' => 'required',
        //     'jurusan' => 'required',
        //     'kelas' => 'required',
        // ];

        // if($this->getMethod() == "POST")
        // {
        //     $rules += [
        //         'nim' => [
        //             'required',
        //             'string',
        //             'unique:mahasiswas,nim',
        //             'max:255',
        //         ],
        //     ];
        // }

        // if($this->getMethod() == "PUT")
        // {
        //     $data = $this->route('mahasiswas');
        //     $rules += [
        //         'email' => [
        //             'required',
        //             'string',
        //             'max:255',
        //             Rule::unique('mahasiswas')->ignore($data->id),
        //         ],
        //     ];
        // }

        // return $rules;
    }
    
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
{

    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
          'name'=>'required',
          'photo'=> 'image|mimes:jpeg,bmp,png|size:2000'
            //
        ];
    }
}

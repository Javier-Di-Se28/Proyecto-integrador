<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMotivoRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

     function rules()
    {
        return [
    
        ];
    }
}
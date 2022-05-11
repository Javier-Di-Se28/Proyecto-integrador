<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVeterinariaRequest extends FormRequest
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

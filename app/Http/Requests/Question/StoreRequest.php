<?php

namespace App\Http\Requests\Question;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title'  => ['required', 'string', 'max:255'],
            'body'   => ['required', 'string', 'max:10000'],
            'status' => ['required'],
        ];
    }
}

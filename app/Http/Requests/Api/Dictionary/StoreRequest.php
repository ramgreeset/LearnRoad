<?php

namespace App\Http\Requests\Api\Dictionary;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'dictionary_title' => 'required|string',
        ];
    }
}

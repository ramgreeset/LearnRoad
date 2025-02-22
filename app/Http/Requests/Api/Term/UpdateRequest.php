<?php

namespace App\Http\Requests\Api\Term;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'term_title' => 'required|string',
            'term_description' => 'required|string',
            'repetition_rate' => 'required|integer',
        ];
    }
}

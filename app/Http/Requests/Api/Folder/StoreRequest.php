<?php

namespace App\Http\Requests\Api\Folder;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'folder_title' => 'required|string',
        ];
    }
}

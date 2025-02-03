<?php

namespace App\Http\Resources\Dictionary;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DictionaryResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'dictionary_title' => $this->title,
        ];
    }
}

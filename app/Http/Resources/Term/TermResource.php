<?php

namespace App\Http\Resources\Term;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TermResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'term_title' => $this->term_title,
            'term_description' => $this->term_description,
        ];
    }
}

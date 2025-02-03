<?php

namespace App\Http\Resources\Folder;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FolderResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'folder_title' => $this->title,
        ];
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Folder\StoreRequest;
use App\Http\Requests\Api\Folder\UpdateRequest;
use App\Http\Resources\Folder\FolderResource;
use App\Models\Folder;

class FolderController extends Controller
{
    public function index(){
        return FolderResource::collection(Folder::all())->resolve();
    }
    public function show(Folder $folder){
        return FolderResource::make($folder);
    }
    public function store(StoreRequest $request){
        $data = $request->validated();
        Folder::create($data);
    }
    public function update(UpdateRequest $request, Folder $folder){
        $data = $request->validated();
        $folder->update($data);
        return 'Прошло заебись';
    }
    public function destroy(Folder $folder){
        $folder->delete();
        return response()->json([
            'Сообщение' => 'Удалено',
        ], Response::HTTP_OK);
    }
}

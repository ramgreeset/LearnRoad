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
    public function show(Folder $profile){
        return FolderResource::make($profile);
    }
    public function store(StoreRequest $request){
        $data = $request->validated();
        Folder::create($data);
    }
    public function update(UpdateRequest $request, Folder $profile){
        $data = $request->validated();
        $profile->update($data);
        return 'Прошло заебись';
    }
    public function destroy(Folder $profile){
        $profile->delete();
        return response()->json([
            'Сообщение' => 'Удалено',
        ], Response::HTTP_OK);
    }
}

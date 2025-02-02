<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Profile\StoreRequest;
use App\Http\Requests\Api\Profile\UpdateRequest;
use App\Http\Resources\Profile\ProfileResource;
use App\Models\Profile;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index(){
        return ProfileResource::collection(Profile::all())->resolve();
    }
    public function show(Profile $profile){
        return ProfileResource::make($profile);
    }
    public function store(StoreRequest $request){
        $data = $request->validated();
        Profile::create($data);
    }
    public function update(UpdateRequest $request, Profile $profile){
        $data = $request->validated();
        $profile->update($data);
        return 'Прошло заебись';
    }
    public function destroy(Profile $profile){
        $profile->delete();
        return response()->json([
            'Сообщение' => 'Удалено',
        ], Response::HTTP_OK);
    }
}

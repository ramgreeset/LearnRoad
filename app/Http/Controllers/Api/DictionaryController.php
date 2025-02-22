<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Dictionary\StoreRequest;
use App\Http\Requests\Api\Dictionary\UpdateRequest;
use App\Http\Resources\Dictionary\DictionaryResource;
use App\Models\Dictionary;
use Illuminate\Http\Response;

class DictionaryController extends Controller
{
    public function index(){
        return DictionaryResource::collection(Dictionary::all())->resolve();
    }
    public function show(Dictionary $dictionary){
        return DictionaryResource::make($dictionary);
    }
    public function store(StoreRequest $request){
        $data = $request->validated();
        Dictionary::create($data);
    }
    public function update(UpdateRequest $request, Dictionary $dictionary){
        $data = $request->validated();
        $dictionary->update($data);
        return 'Прошло заебись';
    }
    public function destroy(Dictionary $dictionary){
        $dictionary->delete();
        return response()->json([
            'Сообщение' => 'Удалено',
        ], Response::HTTP_OK);
    }
}

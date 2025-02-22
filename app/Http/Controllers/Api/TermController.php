<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Term\StoreRequest;
use App\Http\Requests\Api\Term\UpdateRequest;
use App\Http\Resources\Term\TermResource;
use App\Models\Term;
use Illuminate\Http\Response;

class TermController extends Controller
{
    public function index(){
        return TermResource::collection(Term::all())->resolve();
    }
    public function show(Term $term){
        $term->increment('repetition_rate');
        return TermResource::make($term);
    }
    public function store(StoreRequest $request){
        $data = $request->validated();
        Term::create($data);
    }
    public function update(UpdateRequest $request, Term $term){
        $data = $request->validated();
        $term->update($data);
        return 'Прошло заебись';
    }
    public function destroy(Term $term){
        $term->delete();
        return response()->json([
            'Сообщение' => 'Удалено',
        ], Response::HTTP_OK);
    }
}

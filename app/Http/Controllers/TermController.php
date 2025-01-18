<?php

namespace App\Http\Controllers;

use App\Models\Term;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TermController extends Controller
{
    public function index(): View
    {
        $terms = Term::latest()->get();
        return view('index', compact('terms'));
    }

    public function store()
    {
        $attribute = request()->validate([
            'title' => 'required',
            'description' => 'nullable',

        ]);
        Term::create($attribute);
        return redirect('/');
    }

    public function destroy(Term $term){
        $term->delete();
        return redirect('/');
    }
}

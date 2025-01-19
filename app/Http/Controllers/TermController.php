<?php

namespace App\Http\Controllers;

use App\Models\Term;
use Illuminate\View\View;

class TermController extends Controller
{
    public function index(): View
    {
        $terms = Term::get();
        return view('index', compact('terms'));
    }

    public function store()
    {
        $attributes =request()->validate([
            'title' => 'required',
        ]);

        Term::create($attributes);
        return redirect('/');
    }

    public function destroy(Term $term){
        $term->delete();
        return redirect('/');
    }
}

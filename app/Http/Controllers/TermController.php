<?php

namespace App\Http\Controllers;
use App\Models\Term;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TermController extends Controller
{
    public function index(): View
    {
        $terms = Term::get();
        return view('index', compact('terms'));
    }

}

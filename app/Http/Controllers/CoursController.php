<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('cours.create');
    }
    public function store()
    {
        $data = request()->validate([
                'title' => 'required',
                'pdf' => 'required',
        ]);
        $pdfpath = request('pdf')->store('uploads','public');
        auth()->user()->cours()->create([
            'title'=> $data['title'],
            'pdf'=> $pdfpath,
        ]);
        return redirect('profile/'.auth()->user()->id);
        }
}

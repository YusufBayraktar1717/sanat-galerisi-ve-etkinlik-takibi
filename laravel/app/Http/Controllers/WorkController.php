<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\work;
use Illuminate\Http\Request;

class WorkController extends Controller
{


    public function index()
    {
        $works = Work::with('WorkImage', 'city',)->get();
        return view('layouts.sayfalar.eserler', compact('works'));

    }


}

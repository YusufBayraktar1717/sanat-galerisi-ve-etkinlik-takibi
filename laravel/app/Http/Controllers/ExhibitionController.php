<?php

namespace App\Http\Controllers;

use App\Models\exhibition;
use Illuminate\Http\Request;

class ExhibitionController extends Controller
{
    public function index()
    {

        $exhibitions = Exhibition::all();
        return view('layouts.sayfalar.sergiler', compact('exhibitions'));
    }
}

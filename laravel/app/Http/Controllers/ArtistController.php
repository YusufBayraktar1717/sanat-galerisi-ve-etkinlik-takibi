<?php

namespace App\Http\Controllers;

use App\Models\artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {

        $artists = artist::all();


        return view('layouts.sayfalar.sanatcilar', compact('artists'));
    }

}

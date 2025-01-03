<?php

namespace App\Http\Controllers;

use App\Models\auction;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index()
    {
        $activeAuctions = Auction::where('durum', 'devam ediyor')->get(); // Devam eden müzayedeler
        $completedAuctions = Auction::where('durum', 'tamamlandı')->get(); // Tamamlanmış müzayedeler

        return view('layouts.sayfalar.muzayedeler', compact('activeAuctions', 'completedAuctions'));
    }
}

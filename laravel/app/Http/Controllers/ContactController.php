<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        return view('layouts.sayfalar.iletisim');
    }
    public function store(Request $request)
    {
        // Form verilerini al
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // İletişim verisini işleyebilirsiniz (mail gönderme, veritabanı kaydetme vb.)
        // Örnek olarak mail gönderimi:
        Mail::to('admin@example.com')->send(new \App\Mail\ContactForm($validated));

        return back()->with('success', 'Mesajınız başarıyla gönderildi!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'terms' => 'required',
        ]);
        
        // Send the email MUDAR EMAIl AQUI
        Mail::to('2088923@student.uma.pt')->send(new ContactFormMail($validated));
        
        return back()->with('success', 'Mensagem enviada com sucesso! Entraremos em contato brevemente.');
    }
}
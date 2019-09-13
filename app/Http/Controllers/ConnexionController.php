<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function formulaire()
    {
        return view('connexion');
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required','email'],
            'password' => ['required','min:7']
        ]);

        $result = auth()->attempt([
            'email' => request('email'),
            'password' => request('password')
        ]);

        if ($result) {
            return redirect('/mon-compte');
        }

        return back()->withInput()->withErros([
            'email' => "vos identifiants sont incorrecte"
        ]);
    }
}

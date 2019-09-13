<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class UtilisateursController extends Controller
{

    public function liste()
    {
        return view('utilisateur', [
            'utilisateurs' => Utilisateur::all()
        ]);
    }

    public function voir()
    {
        $email = request('email');
        $utilisateurs = Utilisateur::where('email', $email)->first();
        return view('utilisateurs',[
            'utilisateur' => $utilisateurs,
        ]);
    }
}

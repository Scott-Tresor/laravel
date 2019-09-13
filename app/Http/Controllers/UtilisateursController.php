<?php

namespace App\Http\Controllers;

use App\Utilisateur;
use App\Message;

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
        $utilisateurs = Utilisateur::where('email', $email)->firstOrFail();

        return view('utilisateurs',[
            'utilisateur' => $utilisateurs,
        ]);
    }
}

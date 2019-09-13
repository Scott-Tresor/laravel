<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class UtilisateursController extends Controller
{

    function liste()
    {
        return view('utilisateur', [
            'utilisateurs' => Utilisateur::all()
        ]);
    }
}

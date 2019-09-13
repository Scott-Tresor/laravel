<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil()
    {
        if (auth()->guest()) {
            return redirect('/connexion')->withErros([
                'email' => 'Vous devez etre connecter pour voir cette page'
            ]);
        }
        return view('mon-compte');
    }
}

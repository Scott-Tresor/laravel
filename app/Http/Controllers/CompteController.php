<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil()
    {
        if (auth()->guest()) {
            flash('Vous devez etre connecter pour voir cette page')->errors();
            return redirect('/connexion');
        }
        return view('mon-compte');
    }

    public function deconnexion()
    {
        auth()->logout();
        flash('vous etes maintenant deconnecter')->success();

        return redirect('/');
    }

    public function modificationCompte()
    {

    }
}

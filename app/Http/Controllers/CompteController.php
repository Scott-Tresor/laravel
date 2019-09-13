<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil()
    {
        if (auth()->guest()) {
            flash('Vous devez etre connecter pour voir cette page')->error();
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
        if (auth()->guest()) {
            flash('Vous devez etre connecter pour voir cette page')->error();
            return redirect('/connexion');
        }

        request()->validate([
            'password' => ['required','confirmed','min:7'],
            'password_confirmation' => ['required']
        ]);

        auth()->user()->update([
            'password' => bcrypt(request('password')),
        ]);

        flash("Votre mot de passe a ete mise a jours")->success();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil()
    {
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

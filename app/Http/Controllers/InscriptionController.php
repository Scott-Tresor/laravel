<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class InscriptionController extends Controller
{
    public function formulaire()
    {
        return view('inscription');
    }

    public function traitement()
    {
        request()->validate([
            'prenom' => ['required'],
            'email' => ['required','email'],
            'password' => ['required','confirmed','min:7'],
            'password_confirmation' => ['required']
        ], [
            'password.min' => "Pour des raisons de securite veillez saisir un mot de passe de :min caracteres."
        ]);

        $utilisateur = Utilisateur::create([
            'username' => request('prenom'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        flash('Veillez vous connecter et profiter de votre site')->success();
        return redirect('connexion');
    }
}

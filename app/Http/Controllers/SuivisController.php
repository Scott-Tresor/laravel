<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;

class SuivisController extends Controller
{
    public function nouveau()
    {
        $utilisateurSuivi = auth()->user();
        $utilisateurQuiVaui = Utilisateur::where('email', request('email'))->firstOrFail();

        $utilisateurSuivi->suivis()->attach($utilisateurQuiVaui);

        flash('Vous suiviez maintenant cette utilisateur' )->success();
        return back();
    }

    public function enlever()
    {
        $utilisateurQuiSuit = auth()->user();
        $utilisateurQuiEstSuivis = Utilisateur::where('email', request('email'))->firstOrFail();

        $utilisateurQuiSuit->suivis()->detach($utilisateurQuiEstSuivis);

        flash('Vous ne suiviez plus cette utilisateur')->success();
        return back();

    }
}

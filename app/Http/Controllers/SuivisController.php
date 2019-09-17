<?php

namespace App\Http\Controllers;

use App\Mail\NouveauSuiveur;
use App\Utilisateur;
use Illuminate\Support\Facades\Mail;

class SuivisController extends Controller
{
    public function nouveau()
    {
        $utilisateurSuivi = auth()->user();
        $utilisateurQuiVaui = Utilisateur::where('email', request('email'))->firstOrFail();

        $utilisateurSuivi->suivis()->attach($utilisateurQuiVaui);

        Mail::to($utilisateurQuiVaui)->send(new NouveauSuiveur);

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

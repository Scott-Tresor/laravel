<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;

class SuivisController extends Controller
{
    public function nouveau()
    {
        $utilisateurSuivi = auth()->user();
        $utilisateurQuiSui = Utilisateur::where('email', request('email'))->firstOrFail();

        $utilisateurSuivi->suivis()->attach($utilisateurQuiSui);

        flash('Vous suiviez maintenant {{ $utilisateurQuiSui->username }}')->success();
        return back();
    }
}

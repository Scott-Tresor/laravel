<?php

namespace App\Http\Controllers;

use App\Message;

class MessageController extends Controller
{
    /**
     *
     */
    public function nouveau()
    {
        if (auth()->guest()) {
            flash('Vous devez etre connecter pour voir cette page')->errors();
            return redirect('/connexion');
        }

        request()->validate([
            'contenue' => ['required']
        ]);

        Message::create([
            'username_id' => auth()->id(),
            'contenu' => request('contenue')
        ]);
        flash('Votre message a ete bien publier')->success();
        return back();
    }
}

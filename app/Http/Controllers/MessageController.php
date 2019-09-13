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

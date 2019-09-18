<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    public function liste()
    {
        $messages = auth()->user()->suivis->map(function ($utilisateur) {
            return $utilisateur->messages;
        })->flatten();
        return view('actualites',[
            'messages' => $messages,
        ]);
    }
}

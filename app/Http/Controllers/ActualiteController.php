<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    public function liste()
    {
        $messages = [];
        return view('actualites',[
            'messages' => $messages,
        ]);
    }
}

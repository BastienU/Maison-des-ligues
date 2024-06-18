<?php

namespace App\Http\Controllers;
use App\Utilisateur;
use App\Message;

class MessagesController extends Controller
{
    public function nouveau()
    {
        dump("Nouvelle publication");

        request()->validate([
            'message' => ['required'],             
        ]);
        
        Message::create([
            'utilisateur_id' => auth()->user()->id,
            'contenu' => request('message'),
        ]);

        $messages= Message::all();

        return view ('events', [
            'utilisateur' => $utilisateur,
             'messages' => $messages,
        ]);
    }
}
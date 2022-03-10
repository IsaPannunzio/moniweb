<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Contact;


class ContatoController extends Controller
{

    const email = 'isabellamenato1@gmail.com';

    public function submit(Request $request){
         
        $data = ['nome' => $request->nome, 'email' => $request->email, 'mensagem' => $request->mensagem];

        $mail = Mail::to(ContatoController::email)->send(new Contato($data));

        return redirect('/inicio');

    }
}
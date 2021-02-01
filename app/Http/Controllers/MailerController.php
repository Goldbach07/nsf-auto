<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Mail;

class MailerController extends Controller
{
    
    public function send(Request $request)
    {
          Mail::send('mailer.lead', ['user' => $user], function($m) use ($request) {
             $m->from('noreply@nortesf.com.br','Norte Serviços Financeiros');
             $m->to('gustavoalves.a7@gmail.com');
             $m->subject('Novo Lead');
          });
      
      return 'ok';
    }
}
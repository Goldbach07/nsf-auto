<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
          $user = $request->all(); 
      
          Mail::send('mail', ['user' => $user], function($m) use ($request) {
             $m->from('noreply@nortesf.com.br','Norte Serviços Financeiros');
             $m->cc('anytechoficial@gmail.com');
             $m->to('norte.representa@gmail.com');
             $m->subject('Novo Lead');
          });
      
         return 'ok';
    }
}

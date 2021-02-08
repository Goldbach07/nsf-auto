<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $user = $request -> all();
        
        $hostAPI = 'http://localhost/nsf/public/';
        $response = Http::post
        (
            $hostAPI.'lead',
            $user
        );

        $response = collect($response -> json());

        if ($response -> has('success') && $response['success'])
        { 
            try
            {
                Mail::send
                (
                    'mail', 
                    ['user' => $user], 
                    function($mail) use ($request) 
                    {
                        $mail -> from('noreply@nortesf.com.br', 'Norte Serviços Financeiros');
                        $mail -> cc('anytechoficial@gmail.com');
                        $mail -> to('norte.representa@gmail.com');
                        $mail -> subject('Novo Lead');
                    }
                );
            }
            catch (\Exception $exe)
            {
            }

            return 
            [
                'success' => true,
                'message' => 'Cadastro efetuado com sucesso! Em breve entraremos em contato.'
            ];
        }
        else
        {
            return 
            [
                'success' => false,
                'message' => 'Ocorreu um erro durante o processo de cadastro!'.(($response -> has('message')) ? ' Erro: '.$response -> message : '')
            ]; 
        }
    }
}

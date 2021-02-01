<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Mail\SendMailUser as Mail;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::post('/sendLead', [MailController::class,'send']);

Route::post('/sendLeads', function (Request $request) {
      
    Mail::send('mail', ['user' => $request->all()], function($m) use ($request) {
       $m->from('noreply@nortesf.com.br','Norte Serviços Financeiros');
       $m->to('gustavoalves.a7@gmail.com');
       $m->subject('Novo Lead');
    });
    
    return 'ok';
  
});
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();

        Mail::send('emails.order', $data, function($message) use ($request)
        {
            $message->from(env('MAIL_ADDRESS'), env('MAIL_NAME'));

            $message->subject("Pedido Registrado");

            $message->to(env('MAIL_SHOP'), env('MAIL_NAME_SHOP'));

        });

        Session::flash('ok-shop', 'Su pedido ha sido registrado correctamente.');
        return redirect()->back();
    }

    public function email(Request $request)
    {
        $data = $request->all();

        Mail::send('emails.email', $data, function($message) use ($request)
        {
            $message->from(env('MAIL_ADDRESS'), env('MAIL_NAME'));

            $message->subject("Nuevo Registro");

            $message->to(env('MAIL_SHOP'), env('MAIL_NAME_SHOP'));

        });

        Session::flash('ok-shop', 'Se ha registrado correctamente');
        return redirect()->back();
    }
}

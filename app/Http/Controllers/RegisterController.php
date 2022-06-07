<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Contracts\Session\Session;
use Nette\Utils\Random;
use App\Models\Ticket;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'geboortedatum' => 'required',
            'email' => 'required|email',
            'adres' => 'required',
            'huisnummer' => 'required',
            'postcode' => 'required',
            'ticket' => 'required',
            'voucher' => 'required',
        ]);


        // Cart::add([
        //     'id' => rand(50, 1000),
        //     'firstName' => $request->input('firstName'),
        //     'lastName' => $request->input('lastName'),
        //     'geboortedatum' => $request->input('geboortedatum'),
        //     'email' => $request->input('email'),
        //     'adres' => $request->input('adres'),
        //     'huisnummer' => $request->input('huisnummer'),
        //     'appnummer' => $request->input('appnummer'),
        //     'postcode' => $request->input('postcode'),
        //     'ticket' => $request->input('ticket'),
        // ]);

        // session(['id', rand(50, 1000)]);
        // session(['firstName', $request->input('firstName')]);
        // session(['lastName', $request->input('lastName')]);
        // session(['geboortedatum', $request->input('geboortedatum')]);
        // session(['email', $request->input('email')]);
        // session(['adres', $request->input('adres')]);
        // session(['huisnummer', $request->input('huisnummer')]);
        // session(['appnummer', $request->input('appnummer')]);
        // session(['postcode', $request->input('postcode')]);
        // session(['ticket', $request->input('ticket')]);


        // session(['registration' => [
        //     'id' => rand(50, 1000),
        //     'firstName' => $request->input('firstName'),
        //     'lastName' => $request->input('lastName'),
        //     'geboortedatum' => $request->input('geboortedatum'),
        //     'email' => $request->input('email'),
        //     'adres' => $request->input('adres'),
        //     'huisnummer' => $request->input('huisnummer'),
        //     'appnummer' => $request->input('appnummer'),
        //     'postcode' => $request->input('postcode'),
        //     'ticket' => $request->input('ticket'),
        // ]]);

        session(['registration' => request()->all()]);

        // $ticket = Ticket::findOrFail($request->input('ticket'));
        // $totalPrice = 0;
        // if (session('registration.voucher') === "ja") {
        //     $totalPrice = $ticket->price + 5;
        // } else {
        //     $totalPrice = $ticket->price;
        // }

        // return redirect()->route('payment.index', [
        //     'totalPrice' => $totalPrice
        // ]);

        return redirect()->route('createTransaction');
    }
}

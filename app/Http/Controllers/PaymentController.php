<?php

namespace App\Http\Controllers;

use App\Mail\TicketMail;
use App\Models\Customer;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Ticket;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payment');
    }

    public function store()
    {

        return redirect()->route('invoice.index');
    }
}

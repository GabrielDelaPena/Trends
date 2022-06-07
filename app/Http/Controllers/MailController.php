<?php

namespace App\Http\Controllers;

use App\Mail\TicketMail;
use App\Models\Ticket;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
    public function index() {
        return new TicketMail();
    }

   
}

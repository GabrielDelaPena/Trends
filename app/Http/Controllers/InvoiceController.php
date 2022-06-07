<?php

namespace App\Http\Controllers;

use App\Mail\TicketMail;
use App\Models\Customer;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class InvoiceController extends Controller
{
    public function index()
    {
        $customer = new Customer();
        $customer->voornaam = session('registration.firstName');
        $customer->famillienaam = session('registration.lastName');
        $customer->geboorte_datum = session('registration.geboortedatum');
        $customer->email = session('registration.email');
        $customer->adres = session('registration.adres');
        $customer->huis_nr = session('registration.huisnummer');
        $customer->app_nr = session('registration.appnummer');
        $customer->postcode = session('registration.postcode');
        $customer->ticket = session('registration.ticket');
        $customer->voucher = session('registration.voucher');

        $customer->save();

        $link = URL::route('ticketPDF');

         // Send mail
         Mail::to(session('registration.email'))->send(new TicketMail());

        return view('invoices.invoice', [
            'link' => $link,
        ]);
    }

    public function store()
    {
        $ticket = Ticket::findOrFail(session('registration.ticket'));
        $date = $ticket->date;
        // $qrcodeData = session('registration.firstName').' '.$ticket->date;
        $customer = DB::table('customers')
            ->where('voornaam', 'like', session('registration.firstName'))
            ->get();

        $festival = "";

        if (session('registration.ticket') == "1") {
            $festival = "Pukkel Pop";
        }

        if (session('registration.ticket') == "2") {
            $festival = "Laundry Day";
        }

        if (session('registration.ticket') == "3") {
            $festival = "Tomorrowland";
        }

        $path = 'photos/logo2fest.JPG';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $logo = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $path = 'photos/antoine-j-r3XvSBEQQLo-unsplash.jpg';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $image = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $path = 'photos/Sponsors.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $sponsors = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $path = 'photos/Voucher.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $voucher = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $pdf = PDF::loadView('invoices.ticket', [
            'logo' => $logo,
            'image' => $image,
            'date' => $date,
            'festival' => $festival,
            'sponsors' => $sponsors,
            'customer' => $customer,
            'voucher' => $voucher
            // 'qrcodeData' => $qrcodeData
        ]);
        return $pdf->stream('invoice.pdf');
    }
}

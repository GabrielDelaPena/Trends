<?php

use App\Http\Controllers\admin\AdminFormController;
use App\Http\Controllers\admin\AnalyticsController;
use App\Http\Controllers\admin\SalesController;
use App\Http\Controllers\admin\TicketsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewAdminController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\QrcodeController;
use App\Http\Controllers\RegisterController;
use App\Mail\TicketMail;
use App\Models\Ticket;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/ticket', function () {
    return view('ticket');
})->name('ticket');

Route::get('/overons', function () {
    return view('overons');
})->name('overons');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/evenement', function () {
    return view('evenement');
})->name('evenement');

Route::resource('login', LoginController::class);
Route::post('/logout', [LogoutController::class, 'signout'])->name('logout');

Route::resource('admin', AdminController::class);
Route::resource('analytics', AnalyticsController::class);
Route::resource('sales', SalesController::class);
Route::resource('tickets', TicketsController::class);
Route::resource('newAdmin', NewAdminController::class);

Route::resource('payment', PaymentController::class);

Route::resource('register', RegisterController::class);

// Route for mailing

Route::resource('email', MailController::class);

// Route for invoice

Route::resource('invoice', InvoiceController::class);

Route::get('/test', function () {

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

    // return view('invoices.ticket', ['image' => $logo]);
})->name('ticketPDF');


// Route::get('/qrcode', function () {
//     return view('invoices.ticket');
// })->name('ticketPDF');


// Route::get('/pdf' , function () {
//     return view('invoices.invoice');
// });

// Route::get('/betalen' , function () {
//     return view('payment');
// });



// Payments

Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');

Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');

Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');

Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');

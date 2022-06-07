<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        $total = 0;

        foreach ($customers as $customer) {
            if ($customer->ticket == "1") {
                $total += 49.99;
            } else if ($customer->ticket == "2") {
                $total += 39.99;
            } else {
                $total += 99.99;
            }
        }

        return view('admin.sales.sales', [
            'customers' => $customers,
            'total' =>  $total,
        ]);
    }
}

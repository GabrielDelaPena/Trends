<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $user = auth()->user();
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

        $users = User::all();
        return view('admin.dashboard.sidebar', [
            'users' => $users,
            'user' => $user,
            'customers' => $customers,
            'total' => $total
        ]);
    }
}

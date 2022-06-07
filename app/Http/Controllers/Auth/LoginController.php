<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        // validate
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
        ]);

        // sign the user in
        if (!auth()->attempt($request->only('name', 'password'))) {
            return back()->with('status', 'Foutieve gegevens');
        }

        return redirect()->route('admin.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth()->user()->role_id == 1) {
            return view('admin.home');
        } elseif (Auth()->user()->role_id == 2) {
            return view('supervisor.home');
        } elseif (Auth()->user()->role_id == 3) {
            return view('seller.home');
        } elseif (Auth()->user()->role_id == 4) {
            return view('user.home');
        }
    }
}

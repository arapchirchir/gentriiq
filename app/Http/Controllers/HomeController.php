<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $roles = $user->getRoleNames();
        if ($roles->contains('admin')) {
            return redirect()->route('admin.homepage');
        } elseif ($roles->contains('user')) {
            return view('home');
        } else {
            Auth::logout();
            return to_route('login');
        }
        // return view('home');
    }
}

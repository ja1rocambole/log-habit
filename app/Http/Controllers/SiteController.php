<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index()
    {
        return view('home');
    }

    // public function dashboard()
    // {
    //     $habits = Auth::user()->habits;

    //     return view('dashboard', compact('habits'));
    // }
}

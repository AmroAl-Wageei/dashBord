<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    

    public function index() {
        
        return view('home');
    }
    public function redirects() {
        
        $usertype =  Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin');
        } else {
            return view('home');
        }
    }
}
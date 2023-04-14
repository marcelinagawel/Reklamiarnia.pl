<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class TrustedController extends Controller
{
    public function index()
    {
        return view('trusted');
    }
}

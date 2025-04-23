<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(): View
    {
        return view('home');
    }
    public function about(): View
    {
        return view('about');
    }
    public function services(): View
    {
        return view('services');
    }
}

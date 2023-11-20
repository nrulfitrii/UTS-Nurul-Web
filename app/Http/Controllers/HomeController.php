<?php

namespace App\Http\Controllers;

use App\Models\Bunga;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home_page()
    {
        return view('home');
    }

    public function katalog()
    {
        $data = Bunga::all();
        return view('katalog',compact('data'));
    }
}

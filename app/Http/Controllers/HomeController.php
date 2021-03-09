<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latest=Product::latest()->limit(4)->get();

        return view('home',compact('latest'));
    }


    public function admin()
    {
        return view('backend.layouts.home');
    }



}

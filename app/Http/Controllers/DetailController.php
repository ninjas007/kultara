<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request)
    {

    }

    public function recipes(Request $request)
    {
        return view('pages.detail.recipes');
    }

    public function reviews(Request $request)
    {
        return view('pages.detail.reviews');
    }

    public function locations(Request $request)
    {
        return view('pages.detail.locations');
    }
}

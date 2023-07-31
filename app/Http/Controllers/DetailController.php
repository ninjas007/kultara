<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $food)
    {
        $food = Food::where('slug', $food)->first();

        if (!$food) {
            abort(404);
        }

        return view('pages.detail.index', ['food' => $food]);
    }

    public function recipes(Request $request, $food)
    {
        $food = Food::where('slug', $food)->first();

        if (!$food) {
            abort(404);
        }

        return view('pages.detail.recipes', ['food' => $food]);
    }

    public function reviews(Request $request, $food)
    {
        $food = Food::where('slug', $food)->first();

        if (!$food) {
            abort(404);
        }

        return view('pages.detail.reviews', ['food' => $food]);
    }

    public function locations(Request $request, $food)
    {
        $food = Food::where('slug', $food)->first();

        if (!$food) {
            abort(404);
        }
        
        return view('pages.detail.locations', ['food' => $food]);
    }
}

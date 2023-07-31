<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $list_item = Food::orderBy('nama', 'ASC');

        if (isset($request->item)) {
            $list_item->where('nama', 'like', '%'.$request->item.'%');
            $data['filter'] = $request->item;
        }

        $data['list_item'] = $list_item->paginate(10);

        return view('pages.home', $data);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function help()
    {
        return view('pages.help');
    }

    public function about()
    {
        return view('pages.about');
    }
}

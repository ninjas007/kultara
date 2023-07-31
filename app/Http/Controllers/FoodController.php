<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FoodController extends Controller
{
    // public function get(Request $request)
    // {
    //     $foods = Location::with('reviews')->get();

    //     $view_foods = view('contents.list-foods', [
    //         'foods' => $foods
    //     ])
    //     ->render();

    //     return response()->json(['data' => $view_foods]);
    // }
    
    public function save(Request $request)
    {
        try {
            DB::beginTransaction();

            $slug = Str::slug(strtolower($request->nama));
            $check_slug = Food::where('slug', $slug)->count();

            if ($check_slug > 0) {
                $slug = $slug .'-'.$check_slug + 1;
            }

            $food = new Food();
            $food->url_gambar = $request->url_gambar;
            $food->nama = $request->nama;
            $food->slug = $slug;
            $food->keterangan_masakan = $request->keterangan_masakan;
            $food->jenis = $request->jenis;
            $food->email_by = $request->email_by;

            $food->save();

            DB::commit();
        } catch (\Throwable $th) {

            DB::rollback();

            if (config('app.debug')) dd($th);

            return redirect()->back()->with(['error' => 'Failed to add food']);
        }

        return redirect()->back()->with(['success' => 'Success to add food']);
    }
}

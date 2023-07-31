<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReviewFood;
use Illuminate\Support\Facades\DB;

class ReviewFoodController extends Controller
{
    public function get(Request $request)
    {
        $reviews = ReviewFood::where('masakan_id', $request->food_id)->get();

        $view_reviews = view('contents.list-review', [
            'reviews' => $reviews
        ])
        ->render();

        return response()->json(['data' => $view_reviews]);
    }
    
    public function save(Request $request)
    {
        try {
            DB::beginTransaction();

            $review = new ReviewFood();
            $review->masakan_id = $request->masakan_id;
            $review->nama_reviewer = $request->name;
            $review->email_reviewer = $request->email;
            $review->rating = $request->rating;
            $review->comment = $request->comment;

            $review->save();

            DB::commit();
        } catch (\Throwable $th) {

            DB::rollback();

            if (config('app.debug')) dd($th);

            return redirect()->back()->with(['error' => 'Failed to add Review']);
        }

        return redirect()->back()->with(['success' => 'Success to add Review']);
    }
}

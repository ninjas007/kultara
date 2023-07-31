<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LocationReview;
use Illuminate\Support\Facades\DB;

class LocationReviewController extends Controller
{
    public function get(Request $request)
    {
        $location_review = LocationReview::where('tempat_id', $request->tempat_id)->get();

        $view_location_review = view('contents.list-location-review', [
            'list_location_review' => $location_review
        ])
        ->render();

        return response()->json(['data' => $view_location_review]);
    }

    public function save(Request $request)
    {
        try {
            DB::beginTransaction();

            $location_review = new LocationReview();
            $location_review->tempat_id = $request->tempat_id;
            $location_review->nama_reviewer = $request->name;
            $location_review->email_reviewer = $request->email;
            $location_review->rating = $request->rating;
            $location_review->comment = $request->comment;

            $location_review->save();

            DB::commit();
        } catch (\Throwable $th) {

            DB::rollback();

            if (config('app.debug')) dd($th);

            return redirect()->back()->with(['error' => 'Failed to add location']);
        }

        return redirect()->back()->with(['success' => 'Success to add location']);
    }
}

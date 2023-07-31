<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\LocationReview;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function get(Request $request)
    {
        $locations = Location::where('masakan_id', $request->food_id)->with('reviews')->get();

        $view_locations = view('contents.list-location', [
            'locations' => $locations
        ])
        ->render();

        return response()->json(['data' => $view_locations]);
    }
    
    public function save(Request $request)
    {
        try {
            DB::beginTransaction();

            $location = new Location();
            $location->masakan_id = $request->masakan_id;
            $location->nama_tempat = $request->nama_tempat;
            $location->alamat_tempat = $request->alamat_tempat;
            $location->created_by = $request->created_by;
            $location->email_by = $request->email_by;
            $location->google_maps = $request->google_maps ?? null;
            $location->shops = json_encode($this->shops($request));

            $location->save();

            DB::commit();
        } catch (\Throwable $th) {

            DB::rollback();

            if (config('app.debug')) dd($th);

            return redirect()->back()->with(['error' => 'Failed to add location']);
        }

        return redirect()->back()->with(['success' => 'Success to add location']);
    }

    private function shops($request)
    {
        $data = [];

        if ($request->gofood) {
            $data[] = [
                'name' => 'gofood', 
                'file' => 'gofood.png'
            ];
        }

        if ($request->shoppefood) {
            $data[] = [
                'name' => 'shopeefood', 
                'file' => 'shopeefood.png'
            ];
        }

        if ($request->grabfood) {
            $data[] = [
                'name' => 'grabfood', 
                'file' => 'grabfood.jpeg'
            ];
        }

        if ($request->no_wa_tempat != '') {
            $data[] = [
                'name' => 'whatsapp', 
                'file' => 'whatsapp.jpeg',
                'no_wa' => $request->no_wa_tempat
            ];
        }

        return $data;
    }
}

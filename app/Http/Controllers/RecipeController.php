<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    public function get(Request $request)
    {
        $recipes = Recipe::get();

        $view_recipe = view('contents.list-recipe', [
            'recipes' => $recipes
        ])
        ->render();

        return response()->json(['data' => $view_recipe]);
    }

    public function detail(Request $request)
    {
        $recipe = Recipe::where('id', $request->resep_id)->first();

        $view_recipe = view('contents.detail-recipe', [
            'recipe' => $recipe
        ])
        ->render();

        return response()->json(['data' => $view_recipe]);
    }
    
    public function save(Request $request)
    {
        try {
            DB::beginTransaction();

            $resep = new Recipe;
            $resep->nama_masakan = $request->nama_masakan;
            $resep->masakan_id = $request->masakan_id;
            $resep->deskripsi = $request->deskripsi;
            $resep->alat_dan_bahan = json_encode($request->alat_dan_bahan);
            $resep->cara_memasak = json_encode($request->cara_memasak);
            $resep->email_by = $request->email_by;
            $resep->created_by = $request->created_by;

            $resep->save();

            DB::commit();
        } catch (\Throwable $th) {

            DB::rollback();

            if (config('app.debug')) dd($th);

            return redirect()->back()->with(['error' => 'Failed to add recipe']);
        }

        return redirect()->back()->with(['success' => 'Success to add recipe']);
    }
}

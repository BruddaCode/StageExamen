<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessImage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Recipe;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10000',
        ]);

        $image = time() . '.' . $request->image->extension();

        Storage::put($image, file_get_contents($request->file('image')));

        $recipe = new Recipe();
        $recipe->path = $image;
        $recipe->save();

        ProcessImage::dispatch($recipe)->onQueue('default');

        // Store job ID in session for polling
        Session::put('recipe_id', $recipe->id);

        return redirect()->route('wait');
    }

    public function status()
    {
        return view('recept');
    }



    public function download($recipeId){
        // get recipe by id
        $recipe = Recipe::find($recipeId);

        // check if recipe exists
        if (!$recipe) {
            return redirect()->route('recept');
        }

        // get contents of file column
        $file = $recipe->file;

        // put the file contents in a new txt file
        Storage::put('recipe.txt', $file);

        // download the file to the user
        return Storage::download('recipe.txt');

    }



    public function jobStatus()
    {
        $jobId = Session::get('job_id');
        $status = DB::table('jobs')->where('id', $jobId)->value('status');

        return response()->json(['status' => $status]);
    }


    public function like($recipeId){
        // get recipe by id
        $recipe = Recipe::find($recipeId);

        // check if recipe exists
        if (!$recipe) {
            return redirect()->route('recept');
        }

        // increment the likes column by 1
        $recipe->likes += 1;
        $recipe->save();

        return redirect()->route('recept');
    }


    public function dislike($recipeId){
        // get recipe by id
        $recipe = Recipe::find($recipeId);

        // check if recipe exists
        if (!$recipe) {
            return redirect()->route('recept');
        }

        // increment the dislikes column by 1
        $recipe->dislikes += 1;
        $recipe->save();

        return redirect()->route('recept');
    }
}


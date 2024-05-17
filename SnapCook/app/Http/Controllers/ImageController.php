<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ImageUploaded;
use App\AIChef\Chef;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10000',
        ]);

        // Get the image from the request
        $image = $request->file('image');

        $imageName = time().'.'.$image->getClientOriginalExtension();

        $image->move(public_path('tmp_img'), $imageName);

        // Dispatch an event to process the image
        $chef = new Chef();
        $chef->GetRecipe(public_path('tmp_img/'.$imageName));


        // Then, redirect to the recipe page
        return redirect()->route('recept');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessImage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10000',
        ]);

        // Get the image extension
        $imageExtension = pathinfo($request, PATHINFO_EXTENSION);

        // convert image to PNG if it's not in the allowed extensions
        // Allowed image extensions
        $allowedExtensions = ['gif', 'jpeg', 'png', 'webp'];

        if (!in_array($imageExtension, $allowedExtensions)) {
            $image = $request->file('image')->storeAs('tmp_img', $request->file('image')->getClientOriginalName() . '.png');
        } else {
            $image = $request->file('image')->store('tmp_img');
        }

        $image = $request->file('image')->store('tmp_img');

        ProcessImage::dispatch($image)->onQueue('default');

        // Store job ID in session for polling
        Session::put('job_id', $image);

        return redirect()->route('upload.status');
    }

    public function status()
    {
        return view('recept');
    }

    public function jobStatus()
    {
        $jobId = Session::get('job_id');
        $status = DB::table('jobs')->where('id', $jobId)->value('status');

        return response()->json(['status' => $status]);
    }
}

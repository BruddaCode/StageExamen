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

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('tmp_img'), $imageName);

        ProcessImage::dispatch($imageName)->onQueue('default');

        // Store job ID in session for polling
        Session::put('job_id', $imageName);

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

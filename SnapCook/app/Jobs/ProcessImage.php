<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\AIChef\Chef;
use Illuminate\Support\Facades\Log;

class ProcessImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function handle()
    {
        Log::info('ProcessImage job started with path: ' . $this->path);

        try {
            $chef = new Chef();
            Log::info('Chef instance created.');

            $chef->GetRecipe(public_path('tmp_img/' . $this->path));
            Log::info('GetRecipe called.');

            DB::table('jobs')->where('id', $this->path)->update(['status' => 'completed']);
            Log::info('Job status updated to completed.');
        } catch (\Exception $e) {
            Log::error('Error in ProcessImage job: ' . $e->getMessage());
            DB::table('jobs')->where('id', $this->path)->update(['status' => 'failed']);
            $this->fail($e); // Mark job as failed
        }
    }
}

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
use App\Models\Recipe;

class ProcessImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $recipe;

    public function __construct(Recipe $recipe)
    {
        $this->recipe = $recipe;
    }

    public function handle()
    {
        $recipe = $this->recipe;
        Log::info('ProcessImage job started with path: ' . $recipe->path);

        try {

            $chef = new Chef();
            Log::info('Chef instance created.');

            $details = $chef->GetRecipe($recipe->path);
            Log::info('GetRecipe called.');

            $recipe->title = $details['recipe'];
            $recipe->ingredients = $details['ingredients'];
            $recipe->instructions = $details['instructions'];
            $recipe->description = $details['description'];
            $recipe->error = $details['error'];
            $recipe->save();

            Storage::delete($recipe->path);

            Log::info('Job status updated to completed.');
        } catch (\Exception $e) {
            Log::error('Error in ProcessImage job: ' . $e->getMessage());
            $this->fail($e); // Mark job as failed
        }
    }
}

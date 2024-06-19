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

    // Property to hold the Recipe model instance
    protected $recipe;

    // Constructor to initialize the job with a Recipe model instance
    public function __construct(Recipe $recipe)
    {
        $this->recipe = $recipe;
    }

    // The main method that handles the job processing
    public function handle()
    {
        // Retrieve the recipe instance
        $recipe = $this->recipe;

        // Log the start of the job processing with the image path
        Log::info('ProcessImage job started with path: ' . $recipe->path);

        try {
            // Create a new instance of the Chef class
            $chef = new Chef();
            Log::info('Chef instance created.');

            // Call the GetRecipe method to get details from the image
            $details = $chef->GetRecipe($recipe->path);
            Log::info('GetRecipe called.');

            // Update the recipe model with the details from the Chef
            $recipe->title = $details['recipe'];
            $recipe->ingredients = $details['ingredients'];
            $recipe->instructions = $details['instructions'];
            $recipe->description = $details['description'];
            $recipe->error = $details['error'];
            $recipe->file = $details['file'];
            $recipe->save(); // Save the updated model to the database

            // Delete the image from storage as it's no longer needed
            Storage::delete($recipe->path);

            // Log the successful completion of the job
            Log::info('Job status updated to completed.');
        } catch (\Exception $e) {
            // Log any exceptions that occur during processing
            Log::error('Error in ProcessImage job: ' . $e->getMessage());
            $this->fail($e); // Mark job as failed
        }
    }
}

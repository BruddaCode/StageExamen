<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\ImageController;
use App\Models\Recipe;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_recipe_setters_and_getters(): void
    {
        // Arrange
        $recipe = new Recipe();
        $path = '/path/to/recipe';
        $details = 'Some recipe details';

        // Act
        $recipe->path = $path;
        $recipe->details = $details;

        // Assert
        $this->assertEquals($path, $recipe->path);
        $this->assertEquals($details, $recipe->details);

        // Negative Test Case: Check with empty details
        $recipe->details = '';
        $this->assertEquals('', $recipe->details);
    }

    public function testDownload()
    {
        // Arrange
        $recipe = new Recipe();
        $recipe->id = 1;
        $recipe->path = 'path/to/recipe';
        $recipe->title = 'Test Recipe';
        $recipe->description = 'Test Description';
        $recipe->ingredients = 'Test Ingredients';
        $recipe->instructions = 'Test Instructions';
        $recipe->file = 'Test File';
        $recipe->save();

        // Mock the Storage facade
        Storage::fake('local');

        // Act: Call the download method
        $response = $this->get("/download/{$recipe->id}");

        // Assert: File should be stored
        Storage::disk('local')->assertExists('recipe.txt');

        // Assert: Response should be a file download
        $response->assertDownload();

        // Negative Test Case: Download non-existing file
        $response = $this->get('/download/999');
        $response->assertStatus(404);
    }

    public function test_set_file_property(): void
    {
        // Arrange
        $recipe = new Recipe();
        $file = 'path/to/file';

        // Act
        $recipe->file = $file;

        // Assert
        $this->assertEquals($file, $recipe->file);

        // Negative Test Case: Setting an invalid file path
        $invalidFile = '';
        $recipe->file = $invalidFile;
        $this->assertEquals($invalidFile, $recipe->file);
    }
}

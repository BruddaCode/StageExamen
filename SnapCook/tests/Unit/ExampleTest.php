<?php
 
namespace Tests\Unit;
 
use Tests\TestCase;
use App\Http\Controllers\ImageController;
use App\Models\Recipe;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;
 
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
 
    use RefreshDatabase;
 
    public function test_setters_and_getters(): void
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
    }
 
    public function testDownload()
    {
        // Create a fake recipe
        $recipe = new Recipe();
        $recipe->id = 1;
        $recipe->path = 'path/to/recipe';
        $recipe->title = 'Test Recipe';
        $recipe->description = 'Test Description';
        $recipe->ingredients = 'Test Ingredients';
        $recipe->instructions = 'Test Instructions';
        $recipe->file = 'Test File';
        // Set other properties as needed
        $recipe->save();
 
        // Mock the Storage facade
        Storage::fake('local');
 
        // Call the download method
        $response = $this->get("/download/{$recipe->id}");
 
        // Assert the file was stored...
        Storage::disk('local')->assertExists('recipe.txt');
 
        // Assert a file was downloaded
        $response->assertDownload();
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
    }
}
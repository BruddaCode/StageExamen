<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\AIChef\Chef;
use App\Models\Recipe;
use App\Jobs\ProcessImage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Session;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */

    // test the routes

    public function test_home_route()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_upload_route()
    {
        $response = $this->get('/upload');
        $response->assertStatus(405);
    }

    public function test_wait_route()
    {
        $response = $this->get('/wait');
        $response->assertStatus(200);
    }

    public function test_status_route()
    {
        $response = $this->get('/status');
        $response->assertStatus(500);
    }

    public function test_job_status_route()
    {
        $response = $this->get('/job-status');
        $response->assertStatus(500);
    }

    public function test_like_route()
    {
        $response = $this->get('/like');
        $response->assertStatus(404);
    }

    public function test_dislike_route()
    {
        $response = $this->get('/dislike');
        $response->assertStatus(404);
    }

    public function test_download_route()
    {
        $response = $this->get('/download');
        $response->assertStatus(404);
    }

    public function test_about_route()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
    }

    public function test_contact_route()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }

    public function test_recipes_route()
    {
        $response = $this->get('/recipes');
        $response->assertStatus(500);
    }

    public function test_scanner_route()
    {
        $response = $this->get('/scanner');
        $response->assertStatus(200);
    }

    // test the controllers

    public function test_like_controller()
    {
        $response = $this->get('/like/1');
        $response->assertStatus(405);
    }

    public function test_dislike_controller()
    {
        $response = $this->get('/dislike/1');
        $response->assertStatus(405);
    }

    public function test_download_controller()
    {
        $response = $this->get('/download/1');
        $response->assertStatus(302);
    }

    public function test_job_status_controller()
    {
        $response = $this->get('/job-status');
        $response->assertStatus(500);
    }

    public function testGetRecipe(): void
    {
        // Mock the Storage facade
        Storage::fake('local');

        // Create a fake image file
        Storage::put('image.jpg', 'Fake image content');

        // Create a new Chef object
        $chef = new Chef();

        // Call the GetRecipe method
        $result = $chef->GetRecipe('image.jpg');

        // Assert the result is as expected
        $this->assertIsString($result);
    }

    public function testUpload(): void
    {
        // Mock the Storage facade
        Storage::fake('local');

        // Mock the Queue facade
        Queue::fake();

        // Create a fake image file
        $file = UploadedFile::fake()->image('image.jpg');

        // Call the upload method
        $response = $this->post('/upload', [
            'image' => $file,
        ]);

        // Assert the file was stored...
        Storage::disk('local')->assertExists($file->hashName());

        // Assert a job was pushed to the queue...
        Queue::assertPushed(ProcessImage::class);

        // Assert the response
        $response->assertRedirect('wait');
    }

    public function testDownload(): void
    {
        // Create a new recipe
        $recipe = new Recipe();
        $recipe->path = 'image.jpg';
        $recipe->save();

        // Call the download method
        $response = $this->get("/download/$recipe->id");

        // Assert the response
        $response->assertStatus(200);
    }

}

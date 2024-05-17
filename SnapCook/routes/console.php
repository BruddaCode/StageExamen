<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\AIChef\Chef;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


Artisan::command('app:ai-chef {image}', function (Chef $Chef, $image) {
    $Chef->GetRecipe($image);
})->purpose('A-I Chef command')->hourly();

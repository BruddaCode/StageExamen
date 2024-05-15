<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use SnapCook\App\AIChef\AIChef;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


Artisan::command('app:ai-chef {image}', function (AIChef $Chef, $image) {
    return $Chef->GetRecipe($image);
})->purpose('A-I Chef command')->hourly();

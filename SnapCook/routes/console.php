<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use SnapCook\App\AIChef\Test;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


Artisan::command('app:ai-chef {image}', function (Test $test, $image) {
    print_r($test->test($image));
})->purpose('A-I Chef command')->hourly();

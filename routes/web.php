<?php

use Illuminate\Support\Facades\Route;

use Spatie\LaravelPdf\Enums\Format;
use Spatie\LaravelPdf\Facades\Pdf;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pdf', function () {
    return Pdf::view('invoice')
        ->format(Format::A4)
        ->margins(1, 1, 1, 1);
});
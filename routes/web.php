<?php

use Illuminate\Support\Facades\Route;

Route::get('/{paths?}', function () {
    return view('app');
})->where('paths', '.*');

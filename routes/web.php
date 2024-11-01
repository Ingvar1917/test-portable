<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    info("intertia root");
    return Inertia::render('Test');
});

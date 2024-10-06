<?php

use Illuminate\Support\Facades\Route;

// Route untuk 'template' harus seperti ini
Route::get('template', function() {
    return view('template');
});

// Route untuk '/'
Route::get('/', function () {
    return view('admin.layouts.wrapper');
});

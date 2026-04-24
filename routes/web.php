<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // Dia manggil file index.blade.php
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/a", function () {
    return "Return from A";
});

Route::get("/b", function () {
    return "Return from B";
});

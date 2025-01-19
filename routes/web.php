<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $name = "Ygor";

    $names = ["Ygor", "Matheus", "Gabriel", "Guilherme"];

    return view('welcome', 
        [
            'name' => $name,
            "names" => $names
        ]);
});

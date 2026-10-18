<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(
        [
            'name' => "jeewaka",
            'role' => "super_admin",
            "created_at" => "today"
        ]
    );
});

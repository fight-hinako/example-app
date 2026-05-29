<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get( '/profile', function () {
    $username = 'John Doe';
    $is_admin = FALSE;
    $skills = ['PHP', 'HTML', 'JS'];
    return view( 'profile', [
         'name' => $username,
         'is_admin' => $is_admin,
         'skills' => $skills
    ] );
} );

use App\Http\Controllers\PostController;
Route::get('/posts', [PostController::class, "index"]);
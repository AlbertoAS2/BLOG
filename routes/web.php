<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view(uri: '/', view:'welcome')->name('home');
Route::view(uri: 'contacto', view:'contact')->name('contact');
Route::get(uri:'blog', action: function () {
    $posts = [
        ['title' => 'Post 1'],
        ['title' => 'Post 2'],
        ['title' => 'Post 3'],
        ['title' => 'Post 4'],
    ];
})->name('blog');
Route::view(uri:'nosotros', view: 'about')->name('about');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

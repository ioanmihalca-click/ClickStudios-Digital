<?php

use App\Livewire\TagShow;
use App\Livewire\PostList;
use App\Livewire\PostShow;
use App\Livewire\Unsubscribe;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriberController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/subscribers', [SubscriberController::class, 'store'])->name('subscribers.store');
Route::get('/unsubscribe/{token}', Unsubscribe::class)->name('unsubscribe');

    // Blog
    Route::prefix('blog')->group(function () {
    Route::get('/', PostList::class)->name('blog'); 
    Route::get('/postari/{post:slug}', PostShow::class)->name('postari.show');
    Route::get('/etichete/{tag:slug}', TagShow::class)->name('etichete.show');
});

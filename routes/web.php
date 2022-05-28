<?php

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Route;

Route::get('/auth/redirect', function () {
    return Socialite::driver('twitch')->redirect();
})->name('login');

Route::get('/auth/callback', function () {
    $twitch_user = Socialite::driver('twitch')->user();

    $user = User::updateOrCreate([
        'id' => $twitch_user->id,
    ], [
        'name' => $twitch_user->name,
        'display_name' => $twitch_user->user['display_name'],
        'profile_image_url' => $twitch_user->user['profile_image_url'],
        'last_login' => now(),
    ]);

    auth()->login($user);

    return redirect(route('index'));
});

Route::get('/', function () {
    return view('welcome');
})->name('index');

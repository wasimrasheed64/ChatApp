<?php

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return redirect('/login');
});

Route::post('change-bot-url',function(\Illuminate\Http\Request $request){
    $request->validate(['url'=>'required']);
    \App\Models\Bot::find(1)->update([
       'url' => $request->get('url'),
    ]);
    return response()->json(['url'=> $request->get('url'), 'message' => 'success']);
})->withoutMiddleware([VerifyCsrfToken::class]);

Route::view('dashboard', 'dashboard')
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

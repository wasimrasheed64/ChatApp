<?php

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\File;
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
    ->name('dashboard')
    ->middleware(['auth']);

Route::get('chat/{id}', function($id){
    $data = \App\Models\ChatMessage::with('user')
        ->where('chat_id',$id)->get();
    $messages = [];
    foreach ($data as $message){
        $messages[] = [
             $message->user->id == 2 ? 'Bot' : $message->user->name  => $message->message,
        ];
    }
    $fileName = time() . 'chat.txt';
    $fileStorePath = public_path($fileName);
    File::put($fileStorePath, json_encode($messages));
    return response()->download($fileStorePath);
})->middleware(['auth'])->name('chat.download');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

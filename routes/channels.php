<?php

use Illuminate\Support\Facades\Broadcast;

//Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
//    return (int) $user->id === (int) $id;
//});
//Broadcast::channel('messages', function ($user) {
//    return true;
//});

Broadcast::channel('messages.{chatId}', function ($user,$chatId) {
    return $user->chats()->find($chatId);
});

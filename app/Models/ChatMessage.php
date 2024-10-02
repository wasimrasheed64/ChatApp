<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    use HasFactory;
    protected $fillable = [
        'chat_id',
        'message',
        'user_id',
        'read',
        'deliver'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function chat(){
        return $this->belongsTo(Chat::class);
    }
}

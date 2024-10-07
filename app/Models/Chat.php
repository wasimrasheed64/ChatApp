<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'updated_history'
    ];

    public function chatUsers()
    {
        return $this->hasMany(ChatUser::class , 'chat_id');
    }

    public function users(){
        return $this->belongsToMany(User::class, 'chat_users', 'chat_id', 'user_id');
    }


    public function scopeGetChat($query,$userId,$currentUser){
        return $query->whereHas('chatUsers', function ($query) use ($userId, $currentUser) {
            $query->whereIn('user_id', [$userId, $currentUser])->groupBy('chat_id');;
        });
    }

}

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'bio',
        'status',
        'last_active'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function chats(){
        return $this->belongsToMany(Chat::class, 'chat_users',  'user_id','chat_id');
    }

    public function chatUsers(){
        return $this->hasMany(ChatUser::class, 'user_id');
    }

    /*
     * In this function we load all the contact
     * with which the current user doesn't have a
     * chat
     */
    public function scopeUserContacts($query,$userId) {
        $chatUsersId = ChatUser::where('user_id',$userId)->get('user_id')->pluck('user_id');
        $chatUsersId->push($userId);
        $query->whereNotIn('id', $chatUsersId);
    }

}

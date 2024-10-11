<?php

namespace Database\Seeders;

use App\Models\Bot;
use App\Models\Chat;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'email' => 'admin@haier.com',
            'password' => bcrypt('123456'),
            'bio' => 'Full Stack Engineer',
            'avatar' => 'https://cleaningservicevegas.com/storage/images/profile/BHqf0c5xZQ6YrT9u94iBrLyQAnRbvLJsAMuBG06T.jpg',
        ]);
        User::factory()->create([
            'email' => 'bot@haier.com',
            'password' => bcrypt('123456'),
            'bio' => 'Ai Bot',
            'avatar' =>'https://cleaningservicevegas.com/storage/images/profile/BHqf0c5xZQ6YrT9u94iBrLyQAnRbvLJsAMuBG06T.jpg'
        ]);
        $chat = Chat::create(['name' => 'user_chat_2_1' ]);
        $chat->users()->sync([2, 1]);

        Bot::create([
            'name' => 'GML4',
            'url' => 'https://gml4.com/',
        ]);
    }
}

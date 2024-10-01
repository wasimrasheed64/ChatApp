<?php

namespace Database\Seeders;

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

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
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
    }
}

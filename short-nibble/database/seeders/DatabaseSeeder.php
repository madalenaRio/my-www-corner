<?php

namespace Database\Seeders;

use App\Http\Controllers\AuthorsController;
use App\Models\Story;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(150)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Story::factory(250)->create();
        \App\Models\Author::factory(50)->create();

       $this->call(StoriesTableSeeder::class);
       $this->call(AuthorsTableSeeder::class);
       $this->call(UsersTableSeeder::class);

    }
}

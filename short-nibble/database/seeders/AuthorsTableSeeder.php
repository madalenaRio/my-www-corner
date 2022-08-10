<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [
            [
                'name' => "BugsBunny",
            ],
            [
                'name' => "Wile E. Coyote",
            ],
            [
                'name' => "Elmer Fudd",
            ],
            [
                'name' => "Daffy Duck",
            ],
            [
                'name' => "Granny",
            ],
            [
                'name' => "Pepé Le Pew",
            ],
            [
                'name' => "Sylvester",
            ],
            [
                'name' => "Porky Pig",
            ],
            [
                'name' => "Road Runner",
            ],
            [
                'name' => "Tweety",
           ]
        ];

        foreach($authors as $key => $value) {
            Author::create($value);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Buggs Bunny',
                'email' => 'bunny@accme.com',
                'username' => 'Buggo Bunny',
                'password' => '123456789' // password
            ],
            [
                'name' => "Wile E. Coyote",
                'email' => 'coyote@accme.com',
                'username' => 'Doggo',
                'password' => '123456789' // password
            ],
            [
                'name' => "Elmer Fudd",
                'email' => 'fudd@accme.com',
                'username' => 'Elmer',
                'password' => '123456789' // password
            ],
            [
                'name' => "Daffy Duck",
                'email' => 'duck@accme.com',
                'username' => 'Ducko',
                'password' => '123456789' // password
            ],
            [
                'name' => "Granny",
                'email' => 'granny@accme.com',
                'username' => 'Gran Gran',
                'password' => '123456789' // password
            ],
            [
                'name' => "Pepé Le Pew",
                'email' => 'pew@accme.com',
                'username' => 'Le Pew',
                'password' => '123456789' // password
            ],
            [
                'name' => "Sylvester",
                'email' => 'sylvester@accme.com',
                'username' => 'Miau',
                'password' => '123456789' // password
            ],
            [
                'name' => "Porky Pig",
                'email' => 'pig@accme.com',
                'username' => 'Pigglet',
                'password' => '123456789' // password
            ],
            [
                'name' => "Road Runner", 
                'email' => 'runner@accme.com',
                'username' => 'The Runner',
                'password' => '123456789' // password
            ],
            [
                'name' => "Tweety",
                'email' => 'tweety@accme.com',
                'username' => 'Piu Piu',
                'password' => '123456789' // password
            ],
        ];

        foreach($user as $key => $value) {
            User::create($value);
        }

    }
}

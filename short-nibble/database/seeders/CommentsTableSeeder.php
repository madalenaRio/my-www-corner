<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
            [
                'title' => "I don't like this story",
                'content' => "well you know the writer is too looney! You can tell he his a bit wacko, who wirtes these things?!",
                'user_id' => "51",
                'publish_date'=> "1975-03-05",
            ],
            [
                'title' => "Once upon a rainny day is too wet!",
                'content' => "such a gloomy cloudy writing style here",
                'user_id' =>'51',
                'publish_date'=> "1975-01-16",
            ],
            [
                'title' => "chassing is not an art is a necessity!",
                'content' => " I really enjoy this story, right on the target here. Briliant writer",
                'user_id' =>'59',
                'publish_date'=> "1975-05-30",
            ],
            [
                'title' => "well I dnt know?",
                'content' => "hmmm I can tell this writer is strait out of a looney wirter school. There is too many twists in the characters sotry arch. No decent writer palces twists at every chapter..amateur!",
                'user_id' =>'52',
                'publish_date'=> "1975-06-11",
            ],

        ];
        
        foreach($comments as $key => $value) {
            Comment::create($value);
        }
    }
}

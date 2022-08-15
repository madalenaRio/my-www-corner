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
                'content' => "well you know the writer is too looney! You can tell he his a bit wacko, who writes these things?!",
                'user_id' => "151",
                'story_id' => "251",
                'publish_date'=> "1975-03-05",
            ],
            [
                'title' => "Once upon a rainny day is too wet!",
                'content' => "such a gloomy cloudy writing style here",
                'user_id' =>'151',
                'story_id' => "252",
                'publish_date'=> "1975-01-16",
            ],
            [
                'title' => "chassing is not an art is a necessity!",
                'content' => "I really enjoy this story, right on the target here. Briliant writer",
                'user_id' =>'152',
                'story_id' => "254",
                'publish_date'=> "1975-05-30",
            ],
            [
                'title' => "well I dnt know?",
                'content' => "hmmm I can tell this writer is strait out of a looney writer school. There is too many twists in the characters sotry arch. No decent writer palces twists at every chapter..amateur!",
                'user_id' =>'154',
                'story_id' => "253",
                'publish_date'=> "1975-06-11",
            ],

        ];
        
        foreach($comments as $key => $value) {
            Comment::create($value);
        }
    }
}

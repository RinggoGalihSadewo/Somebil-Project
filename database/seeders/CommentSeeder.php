<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Comment::create([

        	'user_id' => 1,
        	'isi_komen' => "ini komen Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore ",
        	'like' => 5
        	
        ]);

        Comment::create([

        	'user_id' => 1,
        	'isi_komen' => "ini komen ke 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore ",
        	'like' => 5
        	
        ]);        
    }
}

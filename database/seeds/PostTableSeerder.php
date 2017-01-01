<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'user_id' => '2',
            'title'   => 'Ok Ok Ok',
            'content' => 'Because yes. Your not are fail.'
        ]);
    }
}

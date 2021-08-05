<?php

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataset = [
            [
                'user_id' => 1,
                'body' => '初投稿です'
            ],
            [
                'user_id' => 1,
                'body' => '自動でデータを入力しました'
            ],
            [
                'user_id' => 2,
                'body' => 'ID:2 のユーザーの投稿です'
            ]
        ];

        foreach($dataset as $data) {
            Post::create($data);
        }

    }
}

<?php

use App\Models\User;
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
        $dataset=[
            [
                'name' => 'トム',
                'email' => 'tom@example.com',
                'password' => bcrypt('password'),//ハッシュ化
            ],
            [
                'name' => 'ジェリー',
                'email' => 'jerry@example.com',
                'password' => bcrypt('password'),//ハッシュ化
            ]
        ];

        foreach($dataset as $data) {
            User::create($data);
        }
    }
}

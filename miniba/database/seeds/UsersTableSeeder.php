<?php

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
        //teamsテーブルに初期値を設定する
        DB::table('users')->insert([
            [
                'name' => 'テストさん１',
                'email' => 'test1@gmail.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'テストさん2',
                'email' => 'test2@gmail.com',
                'password' => Hash::make('password123'),
            ]

        ]);
    }
}

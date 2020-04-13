<?php

use Illuminate\Database\Seeder;



class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //teamsテーブルに初期値を設定する
        DB::table('teams')->insert([
            [
                'user_id' => '1',
                'name' => '大阪テストファイターズ',
                'ruby' => 'おおさかてすとふぁいたーず',
                'email' => 'oosakatest@gmail.com',
                'password' => Hash::make('password123'),
                'url' => 'http://oosakatest.com',
                'member' => '35',
                'message' => '大阪を拠点に楽しくバスケットボールを教えています！誰でも歓迎ですので、是非一度体験に来てください！！',
            ],
            [
                'user_id' => '2',
                'name' => '兵庫テストフェニックス',
                'ruby' => 'ひょうごてすとふぇにっくす',
                'email' => 'hyougotest@gmail.com',
                'password' => Hash::make('password123'),
                'url' => 'http://hyougotest.com',
                'member' => '72',
                'message' => '兵庫を拠点に楽しくバスケットボールを教えています！誰でも歓迎ですので、是非一度体験に来てください！！',
            ],
            [
                'user_id' => '3',
                'name' => '兵庫テストフェニックス',
                'ruby' => 'ひょうごてすとふぇにっくす',
                'email' => 'hyougo@gmail.com',
                'password' => Hash::make('password123'),
                'url' => 'http://hyougotest.com',
                'member' => '72',
                'message' => '兵庫を拠点に楽しくバスケットボールを教えています！誰でも歓迎ですので、是非一度体験に来てください！！',
            ]

        ]);
    }
}

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        //
        'user_id' => $faker->numberBetween(1, 200),
        'name' =>$faker->randomElement(['フェニックス', 'イーグルス', 'ドルフィンズ', 'ビッグベアーズ', 'ライオンズ', 'タイガース', 'ジャイアンツ', 'スターズ']),
        'url' => $faker->url,
        'prefecture' => $faker->prefecture,
        'member' =>$faker->numberBetween(12, 68),
        'message' =>$faker->randomElement(['a', 'b', 'c', 'd']),
        'email' => $faker->unique()->safeEmail,
    ];
});

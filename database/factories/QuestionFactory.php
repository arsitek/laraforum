<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use App\Model\Question;
use App\User;
use Faker\Generator as Faker;

use Illuminate\Support\Str;

$factory->define(Question::class, function (Faker $faker) {

    $title = $faker->sentence;

    return [
        'title' => $title,
        //'slug' => str_slug($title), <-- laravel 5.8
        'slug' => Str::slug($title),
        'body' => $faker->text,
        'category_id' => function () {
            return Category::all()->random();
        },
        'user_id' => function () {
            return User::all()->random();
        }
    ];
});
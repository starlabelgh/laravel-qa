<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker){
    return [
        'title' => rtrim($faker->sentence(rand(5, 10)), "."),
        'body' => $faker->paragraph(rand(3, 7), true),
        'views' => rand(0, 10),
        'answers' => rand(0, 10),
        'voters' => rand(-3, 10)
    ];
});

// namespace Database\Factories;

// use Illuminate\Database\Eloquent\Factories\Factory;

// // class QuestionFactory extends Factory
// // {
// //     /**
// //      * Define the model's default state.
// //      *
// //      * @return array
// //      */
// //     public function definition()
// //     {
// //         return [
// //             //
// //         ];
// //     }
// // }

<?php

use Faker\Generator as Faker;

$factory->define(App\Community::class, function(Faker $faker){

  $name = ucfirst($faker->words(rand(1,5), true));
  return [
    'user_id' => $faker->numberBetween(1,3),
    'name' => $name,
    'slug' => str_slug($name, "-"),
    'description' => $faker->text(rand(100,300)),
    'max_users' => $faker->numberBetween(10,100), //rand(10,100);
    'creator_nickname' => $faker->firstName(),
    'genre' => $faker->word(),
    'current_users_number' => $faker->numberBetween(10,100),
    'rating' => $faker->numberBetween(1,5)
  ];
});

?>

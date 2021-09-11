<?php

namespace Database\Factories;

use App\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
            $factory->define(App\Project::class, function (Faker $faker){
                return[
                    'title'=>$faker->sentence,
                    'description'=>$faker->paragraph,
                ];
                 });


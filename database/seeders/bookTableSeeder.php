<?php

namespace Database\Seeders;
use App\Models\book;
use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class bookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('vi');
        for ($i = 0; $i < 10; $i++) {
            book::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone'=> $faker->numerify('0#########'),
                'address' => $faker->address,
                'location' => $faker->city . ', ' . $faker->country,
                'guests' => $faker->numberBetween(1,10),
                'arrival' => $faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
                'leaving' => $faker->dateTimeBetween('+2 day', '+10 days')->format('Y-m-d'),   
            ]);
        }
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;
use Faker;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model =Contact::class;
    public function definition()
    {
        $faker = Faker\Factory::create('ja_JP');
        return [
            'fullname' => $faker->name,
            'gender' => $faker->numberBetween(1,2),
            'email' => $faker->safeEmail,
            'postcode' =>substr_replace($faker->postcode, '-', 3,0),
            'address' =>$faker->prefecture.$faker->city.$faker->streetAddress,
            'building_name' =>$faker->secondaryAddress,
            'opinion' => $faker->realTextBetween(10,100),
        ];
    }
}

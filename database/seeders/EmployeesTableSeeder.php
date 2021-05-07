<?php

namespace Database\Seeders;
use App\Models\Employee;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();
        for ($i=0;$i<=4;$i++) {
            Employee::create([
                'names_employees' => $faker->name,
                'lastnames_employees' => $faker->lastName,
                'emails_employees' => $faker->email,
                'documents_employees' => $faker->creditCardNumber,
                'genders_employees' => $faker->randomLetter,
            ]);
        }
    }
}

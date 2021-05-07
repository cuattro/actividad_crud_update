<?php

namespace Database\Seeders;
use App\Models\Company;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'names_companies'=> 'Coca-Cola',
            'descriptions_companies' =>'Compañia de gaseosas',
            'nits_companies'=>'123456789',
            'phones_companies'=>'377777',
        ]);
        DB::table('companies')->insert([
            'names_companies'=> 'Postobon',
            'descriptions_companies' =>'Compañia de refrescos',
            'nits_companies'=>'987654321',
            'phones_companies'=>'3111111',
        ]);
        DB::table('companies')->insert([
            'names_companies'=> 'Bavaria',
            'descriptions_companies' =>'Compañia cervecera',
            'nits_companies'=>'987654321',
            'phones_companies'=>'3111111',
        ]);
    }
}

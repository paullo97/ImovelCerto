<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pt_BR');

        for ($i=1; $i<11; $i++) { 
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->safeEmail,
                'password' => bcrypt('secret'),
            ]);
        }
        
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeleponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');

        for($i=0; $i<=100; $i++){
            DB::table('telepon')->insert([
                // 'nama'=> $faker->name,
                'nomor_telepon' => $faker->phoneNumber,
                'pengguna_id' => $i+1
            ]);
        }

    }
}

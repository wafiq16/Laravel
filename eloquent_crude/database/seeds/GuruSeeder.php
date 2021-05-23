<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GuruSeeder extends Seeder
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

        for( $x=1 ; $x<=100; $x++){
            DB::table('guru')->insert([
                'guru_nama' => $faker->name,
                'guru_mata-pelajaran' => $faker->company
            ]);
        }
    }
}

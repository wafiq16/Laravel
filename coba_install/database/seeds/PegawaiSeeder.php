<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
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
        for($i=1; $i<=100; $i++){
            // DB::table('pegawai')->insert([
            //     'pegawai_nama' => $faker->name,
            //     'pegawai_jabatan' => $faker->jobTitle,
            //     'pegawai_umur' => $faker->numberBetween(20, 60),
            //     'pegawai_alamat' => $faker->address,
            // ]);
            DB::table('pegawais')->insert([
                'nama' => $faker->name,
                // 'pegawai_jabatan' => $faker->jobTitle,
                // 'pegawai_umur' => $faker->numberBetween(20, 60),
                'alamat' => $faker->address,
            ]);
        }
    }
}

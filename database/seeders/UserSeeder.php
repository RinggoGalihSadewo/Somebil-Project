<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class UserSeeder extends Seeder
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

        User::create([

        	'nama' => 'Ringgo Galih Sadewo',
        	'email' => 'ringgo@gmail.com',
        	'password' => bcrypt('123456789'),
        	'alamat' => 'Bukit Bilabong Jaya Blok D4 No.11',
        	'ttl' => 'Bandar Lampung, 22 Maret 2001',
        	'jenis_kelamin' => "Laki - laki",
        	'no_hp' => "08317711725"

        ]);


        User::create([

            'nama' => 'Vina Oktariana',
            'email' => 'vina@gmail.com',
            'password' => bcrypt('123456789'),
            'alamat' => 'Bukit Bilabong Jaya Blok D4 No.12',
            'ttl' => 'Bandar Lampung, 22 Maret 1999',
            'jenis_kelamin' => "Perempuan",
            'no_hp' => "08317711725"

        ]);

        for($i = 1; $i <= 20;$i++){

            User::create([

                'nama' => $faker->name(),
                'email' => $faker->email(),
                'password' => bcrypt('123456789'),
                'alamat' => $faker->address(),
                'ttl' =>  $faker->dateTime(),
                'jenis_kelamin' => "Laki - laki",
                'no_hp' => $faker->phoneNumber()


            ]);

        }
    }
}

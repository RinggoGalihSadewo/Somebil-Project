<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Status::create([

        	'user_id' => 1,
            'nama' => "Ringgo Galih Sadewo",
        	'isi_status' => "status 1"

        ]);

        Status::create([

        	'user_id' => 1,
            'nama' => "Ringgo Galih Sadewo",
        	'isi_status' => "status 2"

        ]);

        Status::create([

        	'user_id' => 2,
            'nama' => "Vina Oktariana",
        	'isi_status' => "status 1 user ke 2"

        ]);
    }
}

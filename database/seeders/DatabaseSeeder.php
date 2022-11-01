<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;
use App\Models\Spp;
use App\Models\Siswa;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Kelas::create([
            'nama_kelas' => 'XII RPL 1',
            'kompetensi_keahlian' => 'Software & Computer',
        ]);

        Kelas::create([
            'nama_kelas' => 'XII TKJ 1',
            'kompetensi_keahlian' => 'Hardware & Computer',
        ]);

        Spp::create([
            'tahun' => 2021,
            'nominal' => 800
        ]);

        Spp::create([
            'tahun' => 2022,
            'nominal' => 750
        ]);

        Siswa::create([
            'nisn' => random_int(2000, 9000),
            'nis' => random_int(2000, 9000),
            'nama' => $faker->name,
            'id_kelas' => random_int(1, 2),
            'id_spp' => random_int(1, 2),
            'alamat' => $faker->address,
            'no_telp' => '0813812399',
        ]);
    }
}

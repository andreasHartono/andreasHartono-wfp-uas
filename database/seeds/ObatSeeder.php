<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('obats')->insert(
            ['nama' => 'asam mefenamat',
             'deskripsi' =>'30 kaps/bulan.',
             'harga' => 10000,
             'gambar' =>'asam_mefenamat.jpg',
             'kategoriobat_id'=>1,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'ibuprofen',
             'deskripsi' =>'30 tab/bulan.',
             'harga' => 8000,
             'gambar' =>'ibuprofen.png',
             'kategoriobat_id'=>1,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'ketoprofen',
             'deskripsi' =>'inj 50 mg/mL',
             'harga' => 22000,
             'gambar' =>'ketoprofen.jpg',
             'kategoriobat_id'=>2,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'doksisiklin',
             'deskripsi' =>'kaps 50 mg',
             'harga' => 20000,
             'gambar' =>'doksisiklin.jpg',
             'kategoriobat_id'=>2,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'oksitetrasiklin',
             'deskripsi' =>'inj 50 mg/mL',
             'harga' => 10000,
             'gambar' =>'oksitetrasiklin.jpg',
             'kategoriobat_id'=>3,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'kloramfenikol',
             'deskripsi' =>'kaps 250 mg',
             'harga' => 12000,
             'gambar' =>'kloramfenikol.jpg',
             'kategoriobat_id'=>3,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'azitromisin',
             'deskripsi' =>'tab 250 mg',
             'harga' => 22000,
             'gambar' =>'azitromisin.jpg',
             'kategoriobat_id'=>4,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'eritromisin',
             'deskripsi' =>'tab/kaps 250 mg',
             'harga' => 16000,
             'gambar' =>'eritromisin.jpg',
             'kategoriobat_id'=>4,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'klaritromisin',
             'deskripsi' =>'tab sal selaput 500 mg',
             'harga' => 19000,
             'gambar' =>'kloramfenikol.jpg',
             'kategoriobat_id'=>5,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'spiramisin',
             'deskripsi' =>'tab sal selaput 500 mg',
             'harga' => 26000,
             'gambar' =>'spiramisin.jpg',
             'kategoriobat_id'=>5,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'amikasin',
             'deskripsi' =>'inj 250 mg/mL',
             'harga' => 12000,
             'gambar' =>'amikasin.jpg',
             'kategoriobat_id'=>5,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'gentamisin',
             'deskripsi' =>'inj 10 mg/mL',
             'harga' => 32000,
             'gambar' =>'gentamisin.jpg',
             'kategoriobat_id'=>5,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'kanamisin',
             'deskripsi' =>'serb inj 1.000 mg',
             'harga' => 22000,
             'gambar' =>'kanamisin.png',
             'kategoriobat_id'=>6,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'levofloksasin',
             'deskripsi' =>'tab sal selaput 500 mg',
             'harga' => 12000,
             'gambar' =>'levofloksasin.png',
             'kategoriobat_id'=>6,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'moksifloksasin',
             'deskripsi' =>'tab sal selaput 400 mg',
             'harga' => 18000,
             'gambar' =>'moksifloksasin.jpg',
             'kategoriobat_id'=>7,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'siprofloksasin',
             'deskripsi' =>'tab 500 mg',
             'harga' => 18000,
             'gambar' =>'siprofloksasin.jpg',
             'kategoriobat_id'=>7,
        ]);
    }
}

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
             'kategoriobat_id'=>2,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'ketoprofen',
             'deskripsi' =>'inj 50 mg/mL',
             'harga' => 22000,
             'gambar' =>'ketoprofen.jpg',
             'kategoriobat_id'=>3,
        ]);
    }
}

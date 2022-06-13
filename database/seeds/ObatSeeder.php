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
             'gambar' =>'img',
             'kategoriobat_id'=>1,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'obat batuk',
             'deskripsi' =>'30 kaps/bulan.',
             'harga' => 12000,
             'gambar' =>'img',
             'kategoriobat_id'=>2,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'obat pilek',
             'deskripsi' =>'30 kaps/bulan.',
             'harga' => 14000,
             'gambar' =>'img',
             'kategoriobat_id'=>3,
        ]);

        DB::table('obats')->insert(
            ['nama' => 'obat pusing',
             'deskripsi' =>'30 kaps/bulan.',
             'harga' => 14000,
             'gambar' =>'img',
             'kategoriobat_id'=>3,
        ]);
    }
}

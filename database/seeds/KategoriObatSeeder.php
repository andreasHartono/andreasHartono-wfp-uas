<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_obats')->insert(['nama' => 'ANTIPIRAI']);
        DB::table('kategori_obats')->insert(['nama' => 'SITOTOKSIK']);
        DB::table('kategori_obats')->insert(['nama' => 'TROMBOLITIK']);
    }
}

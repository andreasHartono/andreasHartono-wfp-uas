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
        DB::table('kategori_obats')->insert(['nama' => 'ANALGESIK NARKOTIK']);
        DB::table('kategori_obats')->insert(['nama' => 'ANALGESIK NON NARKOTIK']);
        DB::table('kategori_obats')->insert(['nama' => 'NYERI NEUROPATIK']);
        DB::table('kategori_obats')->insert(['nama' => 'ANTIINFEKSI']);
        DB::table('kategori_obats')->insert(['nama' => 'ANTIBAKTERI']);
        DB::table('kategori_obats')->insert(['nama' => 'TROMBOLITIK']);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      DB::table('users')->insert(
         [
            'nama' => 'dani',
            'username' => 'dani123',
            'password' => Hash::make('PasswordDani123'),
            'alamat' => '12 street',
            'sebagai' => 'user',
         ]
      );

      DB::table('users')->insert(
         [
            'nama' => 'jake',
            'username' => 'Jake123Pass',
            'password' => Hash::make('Jake123Pass'),
            'alamat' => '10 street',
            'sebagai' => 'user',
         ]
      );

      DB::table('users')->insert(
         [
            'nama' => 'makanan',
            'username' => 'Makanan123',
            'password' => Hash::make('Makanan123'),
            'alamat' => '12 street',
            'sebagai' => 'user',
         ]
      );

      DB::table('users')->insert(
         [
            'nama' => 'lempar',
            'username' => 'Lempar123',
            'password' => Hash::make('Lempar123'),
            'alamat' => '12 street',
            'sebagai' => 'pegawai',
         ]
      );
   }
}
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

      DB::table('users')->insert(
         [
            'nama' => 'dara',
            'username' => 'dara123',
            'password' => Hash::make('dara123'),
            'alamat' => 'Jalan Kebayu',
            'sebagai' => 'pegawai',
         ]
      );

      DB::table('users')->insert(
         [
            'nama' => 'Dadar',
            'username' => 'dadar123',
            'password' => Hash::make('dadar123'),
            'alamat' => 'Jalan Besar',
            'sebagai' => 'user',
         ]
      );

      DB::table('users')->insert(
         [
            'nama' => 'Bibit',
            'username' => 'bibit123',
            'password' => Hash::make('bibit123'),
            'alamat' => 'Jalan Merak',
            'sebagai' => 'user',
         ]
      );
   }
}
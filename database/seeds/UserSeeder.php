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
            'email' => 'dani@gmail.com',
            'username' => 'dani123',
            'password' => Hash::make('PasswordDani123'),
            'alamat' => '12 street',
            'sebagai' => 'user',
         ]
      );

      DB::table('users')->insert(
         [
            'nama' => 'jake',
            'email' => 'jake@gmail.com',
            'username' => 'Jake123Pass',
            'password' => Hash::make('Jake123Pass'),
            'alamat' => '10 street',
            'sebagai' => 'user',
         ]
      );

      DB::table('users')->insert(
         [
            'nama' => 'makanan',
            'email' => 'makanan@gmail.com',
            'username' => 'Makanan123',
            'password' => Hash::make('Makanan123'),
            'alamat' => '12 street',
            'sebagai' => 'user',
         ]
      );

      DB::table('users')->insert(
         [
            'nama' => 'lempar',
            'email' => 'lempar@gmail.com',
            'username' => 'Lempar123',
            'password' => Hash::make('Lempar123'),
            'alamat' => '12 street',
            'sebagai' => 'pegawai',
         ]
      );

      DB::table('users')->insert(
         [
            'nama' => 'dara',
            'email' => 'dara@gmail.com',
            'username' => 'dara123',
            'password' => Hash::make('dara123'),
            'alamat' => 'Jalan Kebayu',
            'sebagai' => 'pegawai',
         ]
      );

      DB::table('users')->insert(
         [
            'nama' => 'Dadar',
            'email' => 'dadar@gmail.com',
            'username' => 'dadar123',
            'password' => Hash::make('dadar123'),
            'alamat' => 'Jalan Besar',
            'sebagai' => 'user',
         ]
      );

      DB::table('users')->insert(
         [
            'nama' => 'Bibit',
            'email' => 'bibit@gmail.com',
            'username' => 'bibit123',
            'password' => Hash::make('bibit123'),
            'alamat' => 'Jalan Merak',
            'sebagai' => 'user',
         ]
      );
   }
}
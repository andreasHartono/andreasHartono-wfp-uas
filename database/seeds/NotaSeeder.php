<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert(
            ['total_harga' => 12000,
             'user_id' => 2
        ]);

        DB::table('notas')->insert(
            ['total_harga' => 10000,
             'user_id' => 1
        ]);

        DB::table('notas')->insert(
            ['total_harga' => 12000,
             'user_id' => 3
        ]);

        DB::table('notas')->insert(
            ['total_harga' => 20000,
             'user_id' => 1
        ]);

        DB::table('notas')->insert(
            ['total_harga' => 22000,
             'user_id' => 1
        ]);

        DB::table('notas')->insert(
            ['total_harga' => 14000,
             'user_id' => 1
        ]);

        DB::table('notas')->insert(
            ['total_harga' => 17000,
             'user_id' => 1
        ]);

        DB::table('notas')->insert(
            ['total_harga' => 28000,
             'user_id' => 1
        ]);

        DB::table('notas')->insert(
            ['total_harga' => 30000,
             'user_id' => 1
        ]);
        
        DB::table('notas')->insert(
            ['total_harga' => 12000,
             'user_id' => 3
        ]);
    }
}

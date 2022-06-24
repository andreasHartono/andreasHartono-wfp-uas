<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nota_details')->insert(
            ['kuantitas' => 2,
             'nota_id' => 2,
             'obat_id' => 1
        ]);

        DB::table('nota_details')->insert(
            ['kuantitas' => 4,
             'nota_id' => 2,
             'obat_id' => 2
        ]);

        DB::table('nota_details')->insert(
            ['kuantitas' => 2,
             'nota_id' => 1,
             'obat_id' => 1
        ]);

        DB::table('nota_details')->insert(
            ['kuantitas' => 2,
             'nota_id' => 1,
             'obat_id' => 3
        ]);

        DB::table('nota_details')->insert(
            ['kuantitas' => 5,
             'nota_id' => 3,
             'obat_id' => 4
        ]);

        DB::table('nota_details')->insert(
            ['kuantitas' => 1,
             'nota_id' => 4,
             'obat_id' => 3
        ]); 

        DB::table('nota_details')->insert(
            ['kuantitas' => 5,
             'nota_id' => 5,
             'obat_id' => 2
        ]); 

        DB::table('nota_details')->insert(
            ['kuantitas' => 3,
             'nota_id' => 5,
             'obat_id' => 4
        ]); 

        DB::table('nota_details')->insert(
            ['kuantitas' => 4,
             'nota_id' => 6,
             'obat_id' => 3
        ]);

        DB::table('nota_details')->insert(
            ['kuantitas' => 3,
             'nota_id' => 6,
             'obat_id' => 1
        ]);

        DB::table('nota_details')->insert(
            ['kuantitas' => 1,
             'nota_id' => 7,
             'obat_id' => 3
        ]);

        DB::table('nota_details')->insert(
            ['kuantitas' => 2,
             'nota_id' => 7,
             'obat_id' => 3
        ]);

        DB::table('nota_details')->insert(
            ['kuantitas' => 3,
             'nota_id' => 8,
             'obat_id' => 3
        ]);

        DB::table('nota_details')->insert(
            ['kuantitas' => 2,
             'nota_id' => 9,
             'obat_id' => 5
        ]);

        DB::table('nota_details')->insert(
            ['kuantitas' => 2,
             'nota_id' => 10,
             'obat_id' => 2
        ]);
    }
}

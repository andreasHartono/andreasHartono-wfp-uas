<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNotadetailidColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notadetail', function (Blueprint $table) {
            $table->foreignId('nota_id')->constrained('nota');
            $table->foreignId('obat_id')->constrained('obat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['nota_id']);
        $table->dropForeign(['obat_id']);
    }
}

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
        Schema::table('nota_details', function (Blueprint $table) {
            $table->foreignId('nota_id')->constrained('notas');
            $table->foreignId('obat_id')->constrained('obats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notas', function (Blueprint $table) {
            $table->dropForeign(['nota_id']);
            $table->dropForeign(['obat_id']);
        });
    }
}

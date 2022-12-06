<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ObrisiKolonuBrstanovnikaGrads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grads', function (Blueprint $table) {
            $table->dropColumn('broj_stanovnika');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grads', function (Blueprint $table) {
            $table->after('drzava', function ($table) {
                $table->string('broj_stanovnika');
            });

        });
    }
}

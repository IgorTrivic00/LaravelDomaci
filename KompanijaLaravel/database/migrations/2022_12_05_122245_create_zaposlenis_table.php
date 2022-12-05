<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZaposlenisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zaposlenis', function (Blueprint $table) {
            $table->id();
            
            $table->string('ime');
            $table->string('prezime');
            $table->string('pol');
            $table->string('email');
            $table->string('telefon');
            $table->foreignId('kompanija_id')->constrained('kompanijas');
            $table->foreignId('grad_id')->constrained('grads');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zaposlenis');
    }
}

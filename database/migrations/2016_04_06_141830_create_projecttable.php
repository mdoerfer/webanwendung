<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjecttable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pojects', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
		    $table->integer('seitenanzahl');
            $table->date('Startdatum');
		    $table->date('Gliederung');
		    $table->date('Recherche');
		    $table->date('Schreibphase');
		    $table->date('Korrekturphase');
		    $table->date('Verbesserung');
		    $table->date('Druckerei');
            $table->date('Finalisierungsdatum');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pojects');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Employeur');
            $table->string('Coordonnees');
            $table->string('TypeEtudiant');
            $table->string('Connaissances');
            $table->string('DescriptionEmploi');
            $table->integer('NombreEtudiants');
            $table->date('DateFinAffichage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offres');
    }
}

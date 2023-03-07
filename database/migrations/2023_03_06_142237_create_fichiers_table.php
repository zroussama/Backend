<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichiers', function (Blueprint $table) {

            $table->id('idFichier');
            
            // portfolio 
            $table->unsignedBigInteger('portfolio_id');
            $table->foreign('portfolio_id')
              ->references('idPortfolio')
              ->on('portfolios')
              ->onDelete('cascade');

            $table->string('chemin');
            $table->string('nomFichier');
            $table->date('dateFichier');
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
        Schema::drop('fichiers');
    }
};

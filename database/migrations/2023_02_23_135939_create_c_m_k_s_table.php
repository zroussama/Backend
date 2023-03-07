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
        Schema::create('facturations', function (Blueprint $table) {

            //Relation entre fiche et facturations
            $table->foreignId('fiche_id')->constrained('fiches');

            $table->id('id');
            $table->string('CMK_ID');
            $table->string('Facturation');
            $table->softDeletes();
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

        Schema::drop('facturations', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};

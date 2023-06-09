<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('fiches', function (Blueprint $table) {

            /**
             * ------------- Relation entre connexion et Fiche 1 à 1 ----------------------
             * |  Dans la migration, ajoutez la colonne connexion_id à la table fiches :   |
             * ----------------------------------------------------------------------------
             */
            //$table->unsignedBigInteger('connexion_id')->nullable();

            //  clé étrangère dans la même migration :
          //  $table->foreign('connexion_id')
           // ->references('id')->on('connexions')
           // ->onDelete('cascade');

            //Relation entre Fiche et Contact ||   1 Fiche --> n contact
            //$table->integer('connexion_id')->default(DB::raw('id'))->primary();
            // $table->unsignedBigInteger('fiche_id')->default(DB::raw('id'))->primary();
            // $table->foreign('fiche_id')->references('id')->on('fiches');



            //Table Fiche
            $table->bigIncrements('id');
            $table->unsignedBigInteger('fiche_id')->default(0);
            $table->string('entreprise');
            $table->string('domaine_activite');
            $table->string('logo');
            //gerant
            $table->string('gerant_nom');
            $table->string('gerant_prenom');
            $table->integer('gerant_tel');
            $table->string('gerant_email');
            //Autre

            $table->string('autre_nom')->nullable;
            $table->string('autre_prenom')->nullable;
            $table->integer('autre_tel')->nullable;
            $table->string('autre_email')->nullable;
            $table->string('autre_fonction')->nullable;
            //Origine Localisation
            $table->string('Pays_Origine');
            $table->string('Ville_Origine');
            $table->string('Origin_adress');
            //Prod Localisation
            $table->string('Prod_pays');
            $table->string('prod_ville');
            $table->string('Prod_adress');

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
        Schema::table('fiches', function (Blueprint $table) {
            $table->dropForeign('fiches_connexion_id_foreign');
            $table->dropColumn('connexion_id');
        });
    }
};

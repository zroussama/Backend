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
        Schema::create('connexions', function (Blueprint $table) {
            
            $table->id('id');
            // $table->foreign('id')->references('id')->on('fiches')->onDelete('cascade');
            // $table->integer('connexion_id')->default(DB::raw('id'))->primary();
            // Relation entre fiche et facturations
            // $table->foreignId('connexion_id')->constrained('connexions');

            $table->enum('TYPE_HEBERGEMENT', array('CLOUD', 'ONPREMISE'));/// OnPRemise
            $table->enum('ONPREMISE_CASE', array('SSH','VPN','IPSEC'));

            $table->boolean('STATUS')->default(false);


            $table->text('name');
            $table->text('domain');
            $table->text('port');
            $table->text('link')->default('127.0.0.1:8000');

            $table->string('ip_wan')->nullable();
            $table->string('ip_lan')->nullable();
            $table->string('filebat')->nullable();
            $table->json('Parametre')->nullable();


            $table->text('username')->nullable();
            $table->text('password')->nullable();
            $table->text('rememberToken')->nullable();
            $table->timestamps();
        });

//        DB::table('connexions')->update([
//            'link' => DB::raw("CONCAT(name, '.', domain, ':', port)")
//        ]);
    }


    /**
     * 
     *   $table->id('idConnexion');
     *   $table->json('Parametre')->nullable();
     *   $table->enum('type_heb', ['CLOUD', 'PROMISE']);
     *   $table->enum('PROMISE', ['VPN', 'SSH'])->nullable();
     *   $table->string('link')->nullable();
     *   $table->string('ip')->nullable();
     *   $table->string('ip_wan')->nullable();
     *   $table->string('ip_lan')->nullable();
     *   $table->integer('port')->nullable();
     *   $table->string('filebat')->nullable();
     *   $table->string('username')->nullable();
     *   $table->string('password')->nullable();
     *   $table->string('remember_token')->nullable();
     *   $table->boolean('status')->nullable();
     *   $table->timestamps();
     */
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('connexions');
    }
};

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @retu
     */
    public function boot()
    {
        //
    }
    // Service pour affecter des personnes à un client
    public function affecterPersonnes($clientId, $personnesIds) {
        $client = Client::find($clientId);
        $client->personnes()->sync($personnesIds);
    }
    
    // Service pour affecter un fichier à un portfolio
    public function affecterFichier($portfolioId, $fichierId) {
        $portfolio = Portfolio::find($portfolioId);
        $portfolio->fichiers()->attach($fichierId);
    }

}

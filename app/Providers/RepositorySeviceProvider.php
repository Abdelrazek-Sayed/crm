<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Interfaces\ClientInterface;
use App\Http\Repositories\ClientRepository;

class RepositorySeviceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ClientInterface::class, ClientRepository::class);
    }



    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

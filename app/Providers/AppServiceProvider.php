<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\CharacterServiceInterface;
use App\Services\CharacterService;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register() {
        $this->app->bind(CharacterServiceInterface::class, CharacterService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

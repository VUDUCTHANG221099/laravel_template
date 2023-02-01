<?php
namespace App\Providers;

use App\Contracts\Repositories\TemplateRepositoryInterface;
use App\Repositories\TemplateRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            TemplateRepositoryInterface::class,
            TemplateRepository::class,
        );
        /*
        $this->app->bind(
        [Name]RepositoryInterface::class,
        [Name]Repository::class
        );
        */
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

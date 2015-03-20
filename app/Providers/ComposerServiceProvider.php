<?php namespace bloglaravel5\Providers;

use bloglaravel5\Taxonomy;
use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('front.index', 'student\Http\ViewComposers\BlogComposer');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}

<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class CountPostComposer extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['welcome', 'article.index'], function($view){
            $view->with('conteggio',DB::table('articles')->count());
        });
        View::composer('article.byAuthor', function($view){
            $view->with('conteggio',DB::table('articles')->count());
        });
    }
}

<?php

namespace App\Providers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */


     //funzione per creare il testo  con colore a contrasto conlo sfondo dei riquadri delle categorie. collegato con helpers.helper.php
    public function boot(): void
    {
        if (Schema::hasTable('categories')){
            $categories = Category::all();
            View::share(['categories' => $categories]);
        }

        if (Schema::hasTable('tags')){
            $tags = Tag::all();
            View::share(['tags' => $tags]);
        }
        require_once app_path('Helpers/helper.php');

       

       
    }

   
}






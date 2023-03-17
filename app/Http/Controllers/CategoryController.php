<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // public function index(){
    //     $categories = Category::withCount('articles')->get();
    //     $categories = $categories->sortByDesc('articles_count');

    //     return view('welcome', ['categories' => $categories]);
    // }
    public function index(){
        $categories = Category::withCount('articles')
                       ->join('colors', 'categories.color_id', '=', 'colors.id')
                       ->select('categories.*', 'colors.color')
                       ->get();
        $categories = $categories->sortByDesc('articles_count');
        return view('welcome', ['categories' => $categories]);
    }
    


    public function categoryArticles()
{
    // Otteniamo tutte le categorie
    $categories = Category::all();
    // Dividiamo il numero totale di colonne per 3
    $numColumns = ceil($categories->count() / 3);
    // Otteniamo gli ultimi 3 articoli per ogni categoria
    $articlesByCategory = [];
    foreach ($categories as $category) {
        $articlesByCategory[$category->id] = $category->articles()->orderBy('created_at', 'desc')->take(3)->get();
    }
    // Restituiamo la vista con i dati delle categorie e degli articoli
    return view('article.index', compact('categories', 'numColumns', 'articlesByCategory'));
}
   




}

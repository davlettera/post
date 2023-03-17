<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{   
    public function __construct(){
        $this->middleware('auth')->except('welcome', 'index', 'show', 'byAuthor', 'byCategory');
    }
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $articles =Article::where('is_accepted', true)->orderBy('created_at', 'desc')->get();
    //     return view('article.index', compact('articles'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->category);
        

        $request->validate([
            'title' => 'required|unique:articles|min:5',
            'subtitle' => 'required|unique:articles|min:5',
            'body' => 'required|min:10',
            'image' => 'image|required',
            'category' => 'required',
            'tags' => 'required',

        ]);

        $article = Article::create([
            'title' => $request->title,
            'subtitle' =>$request->subtitle,
            'body' =>$request->body,
            'image' =>$request->file('image')->store('public/images'),
            'category_id' => $request->category,
            'user_id' => Auth::user()->id,
            'slug' => Str::slug($request->title),

        ]);

       
        $tags = explode(', ', $request->tags);

        foreach($tags as $tag){
            $newTag = Tag::updateOrCreate([
                'name' => $tag,
            ]);
            $article->tags()->attach($newTag);
        }
      
        return redirect(route('homepage'))->with('message', 'Article sent');
    }

    public function byCategory(Category $category){
        $articles = $category->articles->sortByDesc('created_at')->filter(function($article){
            return $article->is_accepted == true;
        });
        return view('article.byCategory', compact('category', 'articles'));
    }
    public function byAuthor(User $user){
        $articles = $user->articles->sortByDesc('created_at')->filter(function($article){
            return $article->is_accepted == true;

        });
       
    
        $authorArticlesNumber = $articles->count();
    
        return view('article.byAuthor', compact('user', 'articles', 'authorArticlesNumber'));
    }

    public function articleSearch(Request $request){
        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->orderBy('created_at', 'desc')->get();

        return view('article.search-index', compact('articles', 'query'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {   //dichiarare questa variavile e passarla nella compact a show.blade serve all'if della blade per gestire la presenza dei bottoni accetta e rifiuta. 
        $article_accepted = $article->is_accepted;
        

    
        return view('article.show', compact('article', 'article_accepted'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $article = Article::findOrFail($request->input('article_id'));
        $request->validate([
            'title' => 'required|min:5|unique:articles,title,' . $article->id,
            'subtitle' => 'required|min:5|unique:articles,subtitle,' . $article->id,
            'body' => 'required|min:10',
            'image' => 'image',
            'category' => 'required',
            'tags' => 'required',

        ]);
        $article->update([
            'title' => $request->title,
            'subtitle' =>$request->subtitle,
            'body' =>$request->body,           
            'category_id' => $request->category,
            'slug' => Str::slug($request->title),

        ]);
        if ($request->image) {
            Storage::delete($article->image);
            $article->update([
                'image' => $request->file('image')->store('public/images'),
            ]);
        }
        $tags = explode(', ', $request->tags);
        $newTags = [];

        foreach($tags as $tag){
            $newTag = Tag::updateOrCreate([
                'name' => $tag,
            ]);
            $newTags[] = $newTag->id;
        }
        $article->tags()->sync($newTags);
        
        return redirect(route('writer.dashboard'))->with('message', 'Article correctly updated');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        foreach($article->tags as $tag){
            $article->tags()->detach($tag);

        }
        $article->delete();

        return redirect(route('writer.dashboard',))->with('message', 'Article deleted');
    }

    public function choose($articleId){

        Article::where('id', '>', 0)
        ->update(['best'=>0]);
        Article::where('id', $articleId)
        ->update(['best'=>1]);

        return redirect()->back();
    }

    




    
}


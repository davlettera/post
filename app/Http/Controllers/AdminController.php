<?php

namespace App\Http\Controllers;

use File;
use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $adminRequests = User::where('is_admin', NULL)->get();
        $revisorRequests = User::where('is_revisor', NULL)->get();
        $writerRequests = User::where('is_writer', NULL)->get();


        return view('admin.dashboard', compact('adminRequests', 'revisorRequests', 'writerRequests'));
    }
    public function setAdmin(User $user){
        $user->update([
            'is_admin'=> true,
        ]);
        return redirect(route('admin.dashboard'))->with('message', 'Correctly set the user as admin');
    }
    public function setRevisor(User $user){
        $user->update([
            'is_revisor'=> true,
        ]);
        return redirect(route('admin.dashboard'))->with('message', 'Correctly set the user as revisor');
    }
    public function setWriter(User $user ){
        $user->update([
            'is_writer'=> true,
        ]);
        return redirect(route('admin.dashboard'))->with('message', 'Correctly set the user as writer');
    }
    public function editTag(Request $request, Tag $tag){
        $request->validate([
            'name' => 'required|unique:tags',
        ]);
        $tag->update([
            'name' => strtolower($request->name),
        ]);
        return redirect(route('admin.dashboard'))->with('message', 'Tag correctly updated');
    }
    public function deleteTag(Request $request, Tag $tag){
        foreach ($tag->articles as $article) {
            $article->tags()->detach($tag);
        }
        $tag->delete();

        return redirect(route('admin.dashboard'))->with('message', 'Tag correctly deleted');
    }
    public function editCategory(Request $request, Category $category){
        $request->validate([
            'name' => 'required|unique:categories',
        ]);
        $category->update([
            'name' => strtolower($request->name),
        ]);
        return redirect(route('admin.dashboard'))->with('message', 'Category correctly updated');
    }
    

    public function deleteCategory(Category $category)
    {
        $category->delete();
    
        // Rimuovi lo stile CSS dal file categories.css
        $css = File::get(base_path('resources/css/categories.css'));
        $css = preg_replace('/\.category-' . $category->id . '\s*{.*?}\s*/s', '', $css);
        File::put(base_path('resources/css/categories.css'), $css);
    
        return redirect(route('admin.dashboard'))->with('message', 'Category deleted');
    }
    
    


    public function index() {
        $categories = Category::all();
    
        // Recupera l'ID dell'articolo
        $articleId = 1; // questo è solo un esempio, dovresti usare l'ID dell'articolo corrente
    
        // Recupera la categoria dell'articolo
        $article->category = Article::find($articleId)->category;
    
        return view('my-view', compact('categories', 'articleCategory'));
    }
            public function show($id)
        {
            $article = Article::with('categories')->find($id);

            return view('articles.show', compact('article'));
        }

    
    public function storeCategory(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'color' => 'required|regex:/^#([a-fA-F0-9]{3}){1,2}$/i',
    ]);

    $category = Category::create([
        'name' => strtolower($validatedData['name']),
        'color' => $validatedData['color'],
    ]);

    $style = '.category-' . $category->id . ' { background-color: ' . $category->color . '; }';

    $css_file_path = resource_path('css/categories.css');
    $css = \File::exists($css_file_path) ? \File::get($css_file_path) : '';
    \File::put($css_file_path, $css . $style);

    return redirect(route('admin.dashboard'))->with('message', 'New Category added');
}

    
    
    
    }
   
 
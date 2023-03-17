<?php

namespace App\Models;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    protected $table = 'categories';
    use HasFactory;
    protected $fillable = ['name', 'color'];


    //funzione che lega una categoria a più articoli 
    public function articles(){
        return $this->hasMany(Article::class);
    }
}

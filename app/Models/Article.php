<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'image',
        'user_id',
        'category_id',
        'is_accepted',
        'slug',
    ];

    //funzione che lega gli articoli all'utente autore
    public function user(){
        return $this->belongsTo(User::class);
    }

    //funzione che lega un articolo ad una categoria
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //funzione che restituisce un array con la specifica di quali campi vogliamo indicizzare e quali sono i loro valori
    public function toSearchableArray(){
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'category' => $this->category,
        ];
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    public function readDuration(){
        $totalWords = str_word_count($this->body);
        $minutesToRead = round($totalWords / 200);

        return intval($minutesToRead);
    }


    
}

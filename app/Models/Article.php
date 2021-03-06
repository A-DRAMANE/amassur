<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    use HasFactory;

    protected  $fillable=[
        'titre',
        'image',
        'contenu',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function categorie(){
        return $this->belongsTo('App\Models\CategorieArticle');
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}


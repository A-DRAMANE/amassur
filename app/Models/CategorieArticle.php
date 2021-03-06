<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieArticle extends Model
{
    use HasFactory;

    public function articles(){
        return $this->hasMany('App\Models\Article');
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}

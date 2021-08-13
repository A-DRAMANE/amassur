<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Particulier;
use App\Models\Professionnel;
use App\Models\CategorieArticle;
use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function index(){
        $professionnels=Professionnel::orderBy('titre','asc')->take(4)->get();
        $particuliers=Particulier::orderBy('titre','asc')->take(6)->get();
        $articles=Article::paginate(4);
        $categories=CategorieArticle::orderBy('nom', 'asc')->skip(3)->take(4)->get();
        $titrePage='Amassur blog: Liste de tous les articles';
        $actif='';


        return view('auth.index', compact('categories','actif','articles','professionnels','particuliers','titrePage'));
    }
}

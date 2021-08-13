<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Particulier;
use App\Models\Professionnel;
use App\Models\CategorieArticle;
use Illuminate\Http\Request;

class ArticleController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professionnels=Professionnel::orderBy('titre','asc')->take(4)->get();
        $particuliers=Particulier::orderBy('titre','asc')->take(6)->get();
        $articles=Article::paginate(4);
        $categories=CategorieArticle::orderBy('nom', 'asc')->skip(3)->take(4)->get();
        $titrePage='Amassur blog: Liste de tous les articles';
        $actif='';


        return view('pages.articles.index', compact('categories','actif','articles','professionnels','particuliers','titrePage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function parCategorie(CategorieArticle $categorie)

    {   
        $actif=$categorie->id;
        $professionnels=Professionnel::orderBy('titre','asc')->take(4)->get();
        $particuliers=Particulier::orderBy('titre','asc')->take(6)->get();
        $categories=CategorieArticle::orderBy('nom', 'asc')->skip(3)->take(4)->get();
        $articles=Article::where('categorie_id',$categorie->id)->paginate(4);
        $titrePage='Amassur Blog: Articles de catégorie: '.$categorie->nom;
       
        
        
        return view('pages.articles.index', compact('articles','actif','categories','professionnels','particuliers','titrePage'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($categorie, Article $article )
    
    {

        
        $professionnels=Professionnel::orderBy('titre','asc')->take(4)->get();
        $particuliers=Particulier::orderBy('titre','asc')->take(6)->get();
        $categories=CategorieArticle::orderBy('nom', 'asc')->skip(3)->take(4)->get();
        $article->increment('compteur');
        $articles=Article::orderBy('updated_at','asc')->take(4)->get();
        $titrePage='Amassur Blog: '.$article->titre;
        $actif='';
       
        return view('pages.articles.show', compact('categories','actif','article','articles','professionnels','particuliers','titrePage'));
    }

}

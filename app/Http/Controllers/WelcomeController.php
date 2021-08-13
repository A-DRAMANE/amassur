<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Particulier;
use App\Models\Professionnel;
use App\Models\Partenaire;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professionnels=Professionnel::orderBy('titre','asc')->take(4)->get();
        $particuliers=Particulier::orderBy('titre','asc')->take(8)->get();
        $partenaires=Partenaire::orderBy('updated_at','asc')->take(6)->get();
        $articles=Article::orderBy('updated_at','asc')->take(3)->get();
        
        return view('welcome',compact('particuliers','professionnels','articles','partenaires'));
    }

    
}




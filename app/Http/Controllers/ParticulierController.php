<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Particulier;
use App\Models\Professionnel;
class ParticulierController extends Controller
{
    public function index(){

        $professionnels=Professionnel::orderBy('titre','asc')->take(4)->get();
        $particuliers=Particulier::orderBy('titre','asc')->take(6)->get();
        $titrePage='Amassur: Assurances pour particliers';
        $actif=1;
        

        return view('pages.particuliers.index', compact('actif','professionnels','particuliers','titrePage'));
    }

    public function show(Particulier $particulier)

    {   
        $actif=$particulier->id;
        $professionnels=Professionnel::orderBy('titre','asc')->take(4)->get();
        $particuliers=Particulier::orderBy('titre','asc')->take(6)->get();
        $titrePage='Amassur: '.$particulier->titre;

       
        
        
        return view('pages.particuliers.show', compact('particulier','actif','professionnels','particuliers','titrePage'));

    }
}

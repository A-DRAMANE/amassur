<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Particulier;
use App\Models\Professionnel;

class ProfessionnelController extends Controller
{
    public function index(){

       $particuliers=Particulier::orderBy('updated_at','asc')->take(4)->get();
       $professionnels=Professionnel::orderBy('updated_at','asc')->get();
       $actif=1;
       $titrePage='Amassur: Assirance pour Professionnels';

       return view('pages.professionnels.index', compact('particuliers','professionnels','actif','titrePage'));
    }



    public function show(Professionnel $professionnel){
              
       
        $particuliers=Particulier::orderBy('updated_at','desc')->take(4)->get();
        $professionnels=Professionnel::orderBy('titre','desc')->get();
        $actif=$professionnel->id;
        $titrePage='Amassur: '.$professionnel->titre;
        return view('pages.professionnels.show', compact('particuliers','professionnels','actif','titrePage','professionnel'));
    }
}


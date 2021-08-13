<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Particulier;
use App\Models\Professionnel;

class ComparateurController extends Controller
{
    public function index(){
        $professionnels=Professionnel::orderBy('updated_at','asc')->get();
        $particuliers=Particulier::orderBy('updated_at','asc')->get();
        $titrePage='Comparaison : Assurance Auto';
        $actif=$particuliers[0]->slug;

        return view('pages.comparateurs.index',compact('professionnels','particuliers','titrePage','actif'));
    }

    public function show($comparateur){
        $professionnels=Professionnel::orderBy('updated_at','asc')->get();
        $particuliers=Particulier::orderBy('updated_at','asc')->get();
        $titrePage='Comparateur '.$comparateur;
        $actif=$comparateur;


        return view('pages.comparateurs.form',compact('professionnels','particuliers','titrePage','actif'));

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professionnel;
use App\Models\Particulier;

class AboutController extends Controller
{
    public function index(){
        $professionnels=Professionnel::orderBy('updated_at','asc')->take(4)->get();
        $particuliers=Particulier::orderBy('updated_at','asc')->take(4)->get();
        $titrePage='A propos de Amassur';

        return view('pages.a-propos.index',compact('professionnels','particuliers','titrePage'));
    }
}

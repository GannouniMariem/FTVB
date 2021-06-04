<?php

namespace App\Http\Controllers\frontOffice;

use App\Http\Controllers\Controller;
use App\Models\article;
use App\Models\joueur;
use Illuminate\Http\Request;

class ControllerArticle extends Controller
{
       /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function welcomeindexArticle()
        {
            $articles = article::get();
            $joueurs = joueur::latest('id')->paginate(3);
    
            return view('welcome')->with('articles',$articles)
                                  ->with('joueurs',$joueurs);

        }
}

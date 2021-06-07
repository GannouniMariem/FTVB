<?php

namespace App\Http\Controllers\frontOffice;

use App\Http\Controllers\Controller;
use App\Models\article;
use App\Models\gallery;
use App\Models\joueur;
use Illuminate\Http\Request;

class controllerEquipe extends Controller
{
    public function indexHomme()
    {
        $joueurs = joueur::get();
        $gallerys = gallery::get();
        $article = article::latest('id')->paginate(1);
        $articles = article::latest('id')->paginate(3);
        return view('front-office.equipe nationale senior hommes')->with('joueurs',$joueurs)
                                                                ->with('gallerys',$gallerys)
                                                                ->with('articles',$articles)
                                                                ->with('article',$article);

    }

    public function indexDames()
    {
        $joueurs = joueur::get();
        $gallerys = gallery::get();
        $article = article::latest('id')->paginate(1);
        $articles = article::latest('id')->paginate(3);
        return view('front-office.equipe nationale senior Dames')->with('joueurs',$joueurs)
                                                                ->with('gallerys',$gallerys)
                                                                ->with('articles',$articles)
                                                                ->with('article',$article);

    }

    public function indexgarcon()
    {
        $joueurs = joueur::get();
        $gallerys = gallery::get();
        $article = article::latest('id')->paginate(1);
        $articles = article::latest('id')->paginate(3);
        return view('front-office.equipe nationale jeune garcons')->with('joueurs',$joueurs)
                                                        ->with('article',$article);

    }

    public function indexfilles()
    {
        $joueurs = joueur::get();
        $gallerys = gallery::get();
        $article = article::latest('id')->paginate(1);
        $articles = article::latest('id')->paginate(3);
        return view('front-office.equipe nationale jeune filles')->with('joueurs',$joueurs)
                                                                ->with('gallerys',$gallerys)
                                                                ->with('articles',$articles)
                                                                ->with('article',$article);

    }


    public function indexCoupeHomme()
    {
        $joueurs = joueur::get();
        $gallerys = gallery::get();
        $article = article::latest('id')->paginate(1);
        $articles = article::latest('id')->paginate(3);
        return view('front-office.Coupe tunisie senior homme')->with('joueurs',$joueurs)
                                                                ->with('gallerys',$gallerys)
                                                                ->with('articles',$articles)
                                                                ->with('article',$article);

    }

    public function indexCoupeDame()
    {
        $joueurs = joueur::get();
        $gallerys = gallery::get();
        $article = article::latest('id')->paginate(1);
        $articles = article::latest('id')->paginate(3);
        return view('front-office.Coupe tunisie senior Dame')->with('joueurs',$joueurs)
                                                                ->with('gallerys',$gallerys)
                                                                ->with('articles',$articles)
                                                                ->with('article',$article);

    }


    public function indexHommes()
    {
        $joueurs = joueur::get()->where('sex','H');
        
        return view('front-office.equipe nationale senior hommes')->with('joueurs',$joueurs);
                                                                   

    }

    public function indexFemme()
    {
        $joueurs = joueur::get()->where('sex','F');
        
        return view('front-office.equipe nationale senior hommes')->with('joueurs',$joueurs);
                                                                   

    }
}
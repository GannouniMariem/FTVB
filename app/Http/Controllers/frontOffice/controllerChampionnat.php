<?php

namespace App\Http\Controllers\frontOffice;

use App\Http\Controllers\Controller;
use App\Models\article;
use App\Models\equipe;
use App\Models\gallery;
use Illuminate\Http\Request;

class controllerChampionnat extends Controller
{
    public function indexHommeA()
    {
        $equipes = equipe::get();
        $gallerys = gallery::get();
        $articles = article::latest('id')->paginate(3);
        return view('front-office.Championnat Nationale A senior homme')->with('equipes',$equipes)
                                                                ->with('gallerys',$gallerys)
                                                                ->with('articles',$articles);

    }
    public function indexHommeB()
    {
        $equipes = equipe::get();
        $gallerys = gallery::get();
        $articles = article::latest('id')->paginate(3);
        return view('front-office.Championnat Nationale B senior homme')->with('equipes',$equipes)
                                                                ->with('gallerys',$gallerys)
                                                                ->with('articles',$articles);

    }


    public function indexDameA()
    {
        $equipes = equipe::get();
        $gallerys = gallery::get();
        $articles = article::latest('id')->paginate(3);
        return view('front-office.Championnat Nationale A senior Dame')->with('equipes',$equipes)
                                                                        ->with('gallerys',$gallerys)
                                                                        ->with('articles',$articles);

    }
    public function indexDameB()
    {
        $equipes = equipe::get();
        $gallerys = gallery::get();
        $articles = article::latest('id')->paginate(3);
        return view('front-office.Championnat Nationale B senior Dame')->with('equipes',$equipes)
                                                                        ->with('gallerys',$gallerys)
                                                                        ->with('articles',$articles);
    }
}

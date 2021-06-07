<?php

namespace App\Http\Controllers\frontOffice;

use App\Http\Controllers\Controller;
use App\Models\article;
use App\Models\gallery;
use Illuminate\Http\Request;

class controllerBeachVolley extends Controller
{
    public function circuitnationale()
    {
        $articles = article::latest('id')->paginate(3);
        $gallerys = gallery::get();

        return view('front-office.beach volley circuit nationale')->with('articles',$articles)
                                                                    ->with('gallerys',$gallerys);

    }

    public function equipesnationale()
    {
        $articles = article::latest('id')->paginate(2);
        $gallerys = gallery::get();

        return view('front-office.beach volley les equipes nationale')->with('articles',$articles)
                                                                    ->with('gallerys',$gallerys);

    }
}

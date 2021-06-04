<?php

namespace App\Http\Controllers\frontOffice;

use App\Http\Controllers\Controller;
use App\Models\article;
use App\Models\gallery;
use Illuminate\Http\Request;

class controllerBeachVolley extends Controller
{
    public function index()
    {
        $articles = article::get();
        $gallerys = gallery::get();

        return view('front-office.beach volley circuit nationale')->with('articles',$articles)
                                                                    ->with('gallerys',$gallerys);

    }
}

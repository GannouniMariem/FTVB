<?php

namespace App\Http\Controllers\frontOffice;

use App\Http\Controllers\Controller;
use App\Models\article;
use Illuminate\Http\Request;

class ControllerArticle extends Controller
{
       /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $articles = article::get();
    
            return view('welcome')->with('articles',$articles);

        }
}

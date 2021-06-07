<?php

namespace App\Http\Controllers\frontOffice;

use App\Http\Controllers\Controller;
use App\Models\gallery;
use Illuminate\Http\Request;

class controllerMedia extends Controller
{
    public function gallery(){
        
        $gallerys = gallery::get();
        return view('front-office.media_images')->with('gallerys',$gallerys);
    }
}
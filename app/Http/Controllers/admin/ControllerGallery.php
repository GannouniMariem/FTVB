<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\GeneralTrait;
use App\Models\gallery;
use Illuminate\Http\Request;

class ControllerGallery extends Controller
{
    use GeneralTrait;

     /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
         public function index()
        {
            $gallery = gallery::get();
    
            return view('back-office.gallery')->with('gallery',$gallery);
        }




          /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create(Request $request)
        {
          
          $file_name = $this->saveImage($request->file,'gallery');

            $gallery = new gallery();
    
            $gallery->url = $file_name;
           
            $gallery->save();
            
            return redirect()->back()->with(['sucess'=>'image successfully added']); 

    
        }
}

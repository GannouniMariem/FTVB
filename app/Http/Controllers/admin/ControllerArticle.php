<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\article;
use Illuminate\Http\Request;
use App\Http\Traits\GeneralTrait;
class ControllerArticle extends Controller
{
    use GeneralTrait;
   /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $articles = article::get();
    
            return view('back-office.article')->with('articles',$articles);

        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create(Request $request)
        {
            $file_name = $this->saveImage($request->file,'img');

            $article = new article();
    
            $article->description = $request->input('description');
            $article->attachment = $file_name;

           
            $article->save();
    
            return redirect()->back()->with(['sucess'=>'article successfully added']); 
    
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\article  $article
         * @return \Illuminate\Http\Response
         */
    
        public function show($id)
        {
            $article = article::find($id);
    
            return response()->json($article);
        }
       
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\article  $article
         * @return \Illuminate\Http\Response
         */
    
        public function destroy($id)
        {
            $article = article::find($id);
            $article->delete();
    
        }
}

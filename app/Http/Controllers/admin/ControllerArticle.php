<?php

namespace App\Http\Controllers\admin;

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
            $article = article::get();
    
            return response()->json($article);
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create(Request $request)
        {
            $article = new article();
    
            $article->description = $request->input('description');
            $article->attachment = $request->input('attachment');

           
            $article->save();
    
            return response()->json($article);
    
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

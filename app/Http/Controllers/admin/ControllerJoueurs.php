<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\joueur;
use Illuminate\Http\Request;

class ControllerJoueurs extends Controller
{
         /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $joueur = joueur::get();
    
            return response()->json($joueur);
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create(Request $request)
        {
            $joueur = new joueur();
    
            $joueur->nom = $request->input('nom');
            $joueur->prenom = $request->input('prenom');
            $joueur->numPull = $request->input('numPull');
            $joueur->taille = $request->input('taille');
            $joueur->poids = $request->input('poids');
            $joueur->buts = $request->input('buts');
            $joueur->post = $request->input('post');
           
            $joueur->save();
    
            return response()->json($joueur);
    
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\joueur  $joueur
         * @return \Illuminate\Http\Response
         */
    
        public function show($id)
        {
            $joueur = joueur::find($id);
    
            return response()->json($joueur);
        }
        /**
    
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\joueur  $joueur
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request)
        {
    
            $joueur = joueur::find($request->id);
            
            $joueur->nom = $request->input('nom');
            $joueur->prenom = $request->input('prenom');
            $joueur->numPull = $request->input('numPull');
            $joueur->taille = $request->input('taille');
            $joueur->poids = $request->input('poids');
            $joueur->buts = $request->input('buts');
            $joueur->post = $request->input('post');
    
            $joueur->save();
    
            return response()->json($joueur);
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\joueur  $joueur
         * @return \Illuminate\Http\Response
         */
    
        public function destroy($id)
        {
            $joueur = joueur::find($id);
            $joueur->delete();
    
        }
    
        
}
    

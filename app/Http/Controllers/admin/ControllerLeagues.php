<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\league;
use Illuminate\Http\Request;

class ControllerLeagues extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $league = league::get();
    
            return response()->json($league);
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create(Request $request)
        {
            $league = new league();
    
            $league->nom = $request->input('nom');
            $league->type = $request->input('type');
            $league->classement = $request->input('classement');
            $league->resultat = $request->input('resultat');
           
            $league->save();
    
            return response()->json($league);
    
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\league  $league
         * @return \Illuminate\Http\Response
         */
    
        public function show($id)
        {
            $league = league::find($id);
    
            return response()->json($league);
        }
        /**
    
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\league  $league
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request)
        {
    
            $league = league::find($request->id);
            
            $league->nom = $request->input('nom');
            $league->type = $request->input('type');
            $league->classement = $request->input('classement');
            $league->resultat = $request->input('resultat');
    
            $league->save();
    
            return response()->json($league);
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\league  $league
         * @return \Illuminate\Http\Response
         */
    
        public function destroy($id)
        {
            $league = league::find($id);
            $league->delete();
    
        }
    
}

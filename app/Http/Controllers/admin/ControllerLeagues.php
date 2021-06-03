<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\league;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ControllerLeagues extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $leagues = league::get();
    
            return view('back-office.league')->with('leagues',$leagues);
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create(Request $request)
        {
               //validate data before insert to database

               $validator = Validator::make($request->all(),[
                    
                "nom"=>"required |max:100",
                "type"=>"required ",
                "classement"=>"required",
                "resultat"=>"required",
            

            ]);

            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput($request->all());
            }
          //insert
            $league = new league();
    
            $league->nom = $request->input('nom');
            $league->type = $request->input('type');
            $league->classement = $request->input('classement');
            $league->resultat = $request->input('resultat');
           
            $league->save();
    
            return redirect()->back()->with(['sucess'=>'league successfully added']);    
    
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
    
            return redirect()->back()->with(['sucess'=>'league successfully updated']);    

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
            return redirect()->back()->with(['sucess'=>'league successfully deleted']);        

    
        }
    
}

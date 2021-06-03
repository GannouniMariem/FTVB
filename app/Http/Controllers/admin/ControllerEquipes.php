<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\equipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ControllerEquipes extends Controller
{
   
         /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $equipes = equipe::get();
    
            return view('back-office.equipe')->with('equipes',$equipes);

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
                "score"=>"required",
                "nbPoint"=>"required",
                "staff"=>"required",
                "Nextmatch"=>"required"

            ]);

            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput($request->all());
            }
        //insert
            $equipe = new equipe();
    
            $equipe->nom = $request->input('nom');
            $equipe->type = $request->input('type');
            $equipe->classement = $request->input('classement');
            $equipe->score = $request->input('score');
            $equipe->nbPoint = $request->input('nbPoint');
            $equipe->staff = $request->input('staff');
            $equipe->Nextmatch = $request->input('Nextmatch');
           
            $equipe->save();
    
            return redirect()->back()->with(['sucess'=>'equipe successfully added']);    
    
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\equipe  $equipe
         * @return \Illuminate\Http\Response
         */
    
        public function show($id)
        {
            $equipe = equipe::find($id);
    
            return response()->json($equipe);
        }
        /**
    
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\equipe  $equipe
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request)
        {
    
            $equipe = equipe::find($request->id);
            
            $equipe->nom = $request->input('nom');
            $equipe->type = $request->input('type');
            $equipe->classement = $request->input('classement');
            $equipe->score = $request->input('score');
            $equipe->nbPoint = $request->input('nbPoint');
            $equipe->staff = $request->input('staff');
            $equipe->Nextmatch = $request->input('Nextmatch');

            $equipe->save();
    
            return redirect()->back()->with(['sucess'=>'equipe successfully updated']); 
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\equipe  $equipe
         * @return \Illuminate\Http\Response
         */
    
        public function destroy($id)
        {
            $equipe = equipe::find($id);
            $equipe->delete();
            return redirect()->back()->with(['sucess'=>'equipe successfully deleted']);        

    
        }
    
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\equipe;
use Illuminate\Http\Request;

class ControllerEquipes extends Controller
{
   
         /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $equipe = equipe::get();
    
            return response()->json($equipe);
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create(Request $request)
        {
            $equipe = new equipe();
    
            $equipe->nom = $request->input('nom');
            $equipe->type = $request->input('type');
            $equipe->classement = $request->input('classement');
            $equipe->score = $request->input('score');
            $equipe->nbPoint = $request->input('nbPoint');
            $equipe->staff = $request->input('staff');
            $equipe->Nextmatch = $request->input('Nextmatch');
           
            $equipe->save();
    
            return response()->json($equipe);
    
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
    
            return response()->json($equipe);
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
    
        }
    
}

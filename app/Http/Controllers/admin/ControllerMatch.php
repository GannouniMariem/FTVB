<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\matchs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ControllerMatch extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $matchs = matchs::get();
    
            return view('back-office.match')->with('matchs',$matchs);
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
                    
                "equipe1"=>"required",
                "equipe2"=>"required ",
                "date"=>"required",
                "lieu"=>"required",
                "resultat"=>"required"
            

            ]);

            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput($request->all());
            }
          //insert
            $match = new matchs();
    
            $match->equipe1 = $request->input('equipe1');
            $match->equipe2 = $request->input('equipe2');
            $match->date = $request->input('date');
            $match->lieu = $request->input('lieu');
            $match->resultat = $request->input('resultat');
           
            $match->save();
    
            return redirect()->back()->with(['sucess'=>'match successfully added']); 
    
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\matchs  $match
         * @return \Illuminate\Http\Response
         */
    
        public function show($id)
        {
            $match = matchs::find($id);
    
            return response()->json($match);
        }
        /**
    
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\matchs  $match
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request)
        {
    
            $match = matchs::find($request->id);
            
   
            $match->equipe1 = $request->input('equipe1');
            $match->equipe2 = $request->input('equipe2');
            $match->date = $request->input('date');
            $match->lieu = $request->input('lieu');
            $match->resultat = $request->input('resultat');
    
            $match->save();
    
            return redirect()->back()->with(['sucess'=>'match successfully updated']);    
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\matchs  $match
         * @return \Illuminate\Http\Response
         */
    
        public function destroy($id)
        {
            $match = matchs::find($id);
            $match->delete();

            return redirect()->back()->with(['sucess'=>'match successfully deleted']);        
    
        }
}

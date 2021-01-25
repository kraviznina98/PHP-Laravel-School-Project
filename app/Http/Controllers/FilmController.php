<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller
{
    public function all(){
        $filmovi= Film::all();
        return view('filmovi', [
            'filmovi'=>$filmovi
        ]);

    }
    public function view($id){

        $pieces = explode("/", url()->current());
        $film= Film::findOrFail($pieces[count($pieces)-1]);
        return view('film',['film'=>$film]);

    }
    public function create(Request $request){
        $film= new Film();
        $film->naslov=$request->naslov;
        $film->opis=$request->opis;
        $film->rejting=$request->rejting;
        $film->reziser=$request->reziser;
        $film->poster=$request->poster;
        $film->trajanje=$request->trajanje;
        $film->zanr_id=$request->zanr_id;
        $film->save();
        return redirect('/'.$request->zanr_id.'/'.$request->id);
    }
    public function getAll(){

        return response()->json(Film::all(),200);
    }
    public function getById($id){
        $film=Film::find($id);
        if(is_null($film)){
            return response()->json(["message"=>"Film nije pronadjen!"],404);
        }
        return response()->json($film,200);
    }
    public function save(Request $request){

        $validator = Validator::make($request->all(), [
            'naslov'=>'required|min:2',
            'opis'=>'required|min:2',
            'trajanje'=>'required|min:2',
            'reziser'=>'required|min:2',
            'poster'=>'required|min:2',
            'rejting'=>'required',
            'zanr_id'=>'required',

        ]);

        if ($validator->fails()) {
            return response()->json(["message"=>"Sva polja su obavezna"],400);
        }
        $film= Film::create($request->all());
        return response()->json($film, 201);
    }
    public function delete(Request $request, $id){
        $film=Film::find($id);

        if(is_null($film)){
            return response()->json(["message"=>"Film nije pronadjen!"],404);
        }
        $film->delete();
        return response()->json(null,204);
    }
}

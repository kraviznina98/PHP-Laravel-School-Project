<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Zanr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ZanrController extends Controller
{
    public function all(){
        $zanrovi=Zanr::all();
        $filmovi= Film::all();
        foreach ($zanrovi as $zanr){
            $add=[];
            foreach ($filmovi as $film){
                if($film->zanr_id==$zanr->id){
                    $add[count($add)]=$film;
                }
            }
            $zanr->filmovi=$add;
        }
        return view('zanrovi', [
            'zanrovi'=>$zanrovi
        ]);

    }
    public function view($id){
        $zanr= Zanr::findOrFail($id);
        $filmovi= Film::all();
        $add=[];
        foreach ($filmovi as $film) {
            if ($film->zanr_id == $zanr->id) {
                $add[count($add)] = $film;
            }
        }
            $zanr->filmovi=$add;
            return view('zanr',['zanr'=>$zanr]);

    }
    public function create(Request $request){
        $zanr= new Zanr();
        $zanr->naziv=$request->naziv;
        $zanr->save();
        return redirect('/'.$request->id);
    }
    public function save(Request $request){

        $validator = Validator::make($request->all(), [
            'naziv'=>'required|min:2'
        ]);

        if ($validator->fails()) {
            return response()->json(["message"=>"Naziv je obavezan i mora biti veci od 2 karaktera"],400);
        }
        $zanr= Zanr::create($request->all());
        return response()->json($zanr, 201);
    }
    public function delete(Request $request, $id){
        $zanr=Zanr::find($id);
        $svi=Film::all();
        if(is_null($zanr)){
            return response()->json(["message"=>"Zanr nije pronadjen!"],404);
        }
        foreach ($svi as $film) {
            if ($film->zanr_id == $zanr->id){
                $film->delete();
            }
        }
        $zanr->delete();
        return response()->json(null,204);
    }
    public function getAll(){
        $zanrovi=Zanr::all();
        $svi=Film::all();
        foreach ($zanrovi as $zanr) {
            $filmovi=[];
            foreach ($svi as $film) {
                if ($film->zanr_id == $zanr->id){
                    $filmovi[count($filmovi)]=$film;
                }
            }
            $zanr->filmovi=$filmovi;
        }

        return response()->json($zanrovi,200);
    }
    public function getById($id){
        $zanr=Zanr::find($id);
        $svi=Film::all();
        if(is_null($zanr)){
            return response()->json(["message"=>"Film nije pronadjen!"],404);
        }
        $filmovi=[];
        foreach ($svi as $film) {
            if ($film->zanr_id == $zanr->id){
                $filmovi[count($filmovi)]=$film;
            }
        }
        $zanr->filmovi=$filmovi;
        return response()->json($zanr,200);
    }
}

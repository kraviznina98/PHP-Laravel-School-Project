<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Zanr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ZanrController extends Controller
{
    public function all(){
        $zanrovi=Zanr::all();
        $knjige= Book::all();
        foreach ($zanrovi as $zanr){
            $add=[];
            foreach ($knjige as $book){
                if($book->zanr_id==$zanr->id){
                    $add[count($add)]=$book;
                }
            }
            $zanr->knjige=$add;
        }
        return view('zanrovi', [
            'zanrovi'=>$zanrovi
        ]);

    }
    public function view($id){
        $zanr= Zanr::findOrFail($id);
        $knjige= Book::all();
        $add=[];
        foreach ($knjige as $book) {
            if ($book->zanr_id == $zanr->id) {
                $add[count($add)] = $book;
            }
        }
            $zanr->knjige=$add;
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
        $svi=Book::all();
        if(is_null($zanr)){
            return response()->json(["message"=>"Zanr nije pronadjen!"],404);
        }
        foreach ($svi as $book) {
            if ($book->zanr_id == $zanr->id){
                $book->delete();
            }
        }
        $zanr->delete();
        return response()->json(null,204);
    }
    public function getAll(){
        $zanrovi=Zanr::all();
        $svi=Book::all();
        foreach ($zanrovi as $zanr) {
            $knjige=[];
            foreach ($svi as $book) {
                if ($book->zanr_id == $zanr->id){
                    $knjige[count($knjige)]=$book;
                }
            }
            $zanr->knjige=$knjige;
        }

        return response()->json($zanrovi,200);
    }
    public function getById($id){
        $zanr=Zanr::find($id);
        $svi=Book::all();
        if(is_null($zanr)){
            return response()->json(["message"=>"Knjiga nije pronadjena!"],404);
        }
        $knjige=[];
        foreach ($svi as $book) {
            if ($book->zanr_id == $zanr->id){
                $knjige[count($knjige)]=$book;
            }
        }
        $zanr->knjige=$knjige;
        return response()->json($zanr,200);
    }
}

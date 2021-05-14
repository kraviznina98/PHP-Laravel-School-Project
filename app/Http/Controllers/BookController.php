<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function all(){
        $knjige= Book::all();
        return view('knjige', [
            'knjige'=>$knjige
        ]);

    }
    public function view($id){

        $pieces = explode("/", url()->current());
        $book= Book::findOrFail($pieces[count($pieces)-1]);
        return view('book',['book'=>$book]);

    }
    public function create(Request $request){
        $book= new Book();
        $book->naslov=$request->naslov;
        $book->opis=$request->opis;
        $book->rejting=$request->rejting;
        $book->pisac=$request->pisac;
        $book->poster=$request->poster;
        $book->brStrana=$request->brStrana;
        $book->zanr_id=$request->zanr_id;
        $book->save();
        return redirect('/'.$request->zanr_id.'/'.$request->id);
    }
    public function getAll(){

        return response()->json(Book::all(),200);
    }
    public function getById($id){
        $book=Book::find($id);
        if(is_null($book)){
            return response()->json(["message"=>"Knjiga nije pronadjena!"],404);
        }
        return response()->json($book,200);
    }
    public function save(Request $request){

        $validator = Validator::make($request->all(), [
            'naslov'=>'required|min:2',
            'opis'=>'required|min:2',
            'brStrana'=>'required|min:2',
            'pisac'=>'required|min:2',
            'poster'=>'required|min:2',
            'rejting'=>'required',
            'zanr_id'=>'required',

        ]);

        if ($validator->fails()) {
            return response()->json(["message"=>"Sva polja su obavezna"],400);
        }
        $book= Book::create($request->all());
        return response()->json($book, 201);
    }
    public function delete(Request $request, $id){
        $book=Book::find($id);

        if(is_null($book)){
            return response()->json(["message"=>"Knjiga nije pronadjena!"],404);
        }
        $book->delete();
        return response()->json(null,204);
    }
}

<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Book;

class NavController extends Controller {

    public function home()
    {
        return view('home');
    }

    public function books()
    {
        $books = Book::all() ;//recuperer toutes les information de la table :$books c est une variable 
        //equivaut à SELECT * FROM books
        //dd($books);pour verifier s on a tout recupé 
        return view('books',['books'=>$books]);
        //return view('books',compact('books')) ;
    }

    public function addBook()
    {
        return view('addBook');
    }

    public function book($id) {

       
        $book = Book::find($id);
        

        return view('book',['book' =>$book]) ; 
        
    }

    public function update(Request $request) {

                
        $book = Book::find($request->id) ; 

        return view('update',['book' =>$book]) ; 

    }


    
  



}

<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function all(){
    //     $atuhors = Author::with('book')->get();
    //     dd($atuhors->toArray());
    // }
    public function all(){
        // $atuhors = Author::with('book')->get();
        // dd($atuhors->toArray());
        // $atuhor = Author::with('book')->first();
        // dd($atuhor->toArray());

         $books = Book::with('author')->get();
         dd($books->toArray());
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\BookController;
use App\Models\Genre;

class WkbookController extends Controller
{
    
    //

    public function tampilkandata(Book $book){
        return view('All_Book', [
            'title' => 'WIKBOOK',
            'Book' => $book,
            'Book' => Book::all(),
            'genre' => Genre::all(),
        ]);
    }

    public function tampilkanDetail(Book $Book)
    {
        return view('BOOK', [
            'title' => 'Single hal',
            'Book' => $Book,
            'genre' => Genre::all(),
        ]);
    }

    public function user(){
        return view('dashboard.user.index');
    }
}

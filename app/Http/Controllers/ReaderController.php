<?php

namespace App\Http\Controllers;

use App\Models\Reader;
use App\Models\Book;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    public function viewReader(){
        $readers = Reader::all();
        return view('viewReader', compact('readers'));
    }

    public function viewBook(){
        $books = Book::all();
        return view('viewBook', compact('books'));
    }


}

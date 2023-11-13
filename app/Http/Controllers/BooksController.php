<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        return view('book.all',[
            "title" => "Book",
           "books" => Books::all()
        ]);
    }
    public function show($booksId){
        $book = Books::find($booksId);
        $title = "Details " . $book->nama_books;
    
        return view("book.detail", [
            "title" => $title,
            "book" => $book
        ]);
    }
    // public function show($student){
    //     return view("student.detail",[
    //         "title" => "Details $student",
    //         "student" => Student::find($student)
    //     ]);
    // }
    
}

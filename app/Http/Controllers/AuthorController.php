<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        return view('author.all',[
            "title" => "Author",
           "authors" => Author::all()
        ]);
    }
    public function show($authorId){
        $author = Author::find($authorId);
        $title = "Details " . $author->nama_author;
    
        return view("author.detail", [
            "title" => $title,
            "author" => $author
        ]);
    }
    // public function show($student){
    //     return view("student.detail",[
    //         "title" => "Details $student",
    //         "student" => Student::find($student)
    //     ]);
    // }
    
}

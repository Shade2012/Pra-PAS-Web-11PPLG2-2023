<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    public function index(){
        return view('cabang.all',[
            "title" => "Cabang",
           "cabang2" => cabang::all()
        ]);
    }
    public function show($cabang2Id){
        $cabang = cabang::find($cabang2Id);
        $title = "Details " . $cabang->nama_cabang;
    
        return view("cabang.detail", [
            "title" => $title,
            "cabang" => $cabang
        ]);
    }
    // public function show($student){
    //     return view("student.detail",[
    //         "title" => "Details $student",
    //         "student" => Student::find($student)
    //     ]);
    // }
}

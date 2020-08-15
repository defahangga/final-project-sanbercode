<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\answer;
use App\question;
use App\tag;

use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function store(Request $request, $pertanyaan_id){
        
        
        $pertanyaan = answer::create([
            "isi" => $request["isi_jawaban"],
            "question_id" => $pertanyaan_id
        ]);
        
        $question = question::all();
        $jawaban = answer::all();
    
        return view ('index', compact('jawaban','question'));
        
    }
}

<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\question;
use App\answer;
use App\tag;

use Illuminate\Http\Request;

class PertanyaanController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    // menampilkan halaman create
    public function create(){
        return view('create');
    }

    // menyimpan pertanyaan ke database
    public function store(Request $request){

        $pertanyaan = question::create([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "tags" => $request["tags"],
            "user_id" => Auth::id()
        ]);

        // $pertanyaan->tags()->sync($tag_ids);

        return redirect('/pertanyaan');
    }

    // menampilkan seluruh pertanyaan kehalaman index
    public function index(){
        $question = question::all();
        $jawaban = answer::all();


        return view('index', compact('question','jawaban'));
    }

    // menampilkan halaman edit pertanyaan
    public function edit($pertanyaan_id){
        $edit_question = question::find($pertanyaan_id);

        return view('edit', compact('edit_question'));
    }

    public function update($pertanyaan_id, Request $request){
        $update = question::where('id', $pertanyaan_id)->update([
            'judul' => $request['judul'],
            'isi' => $request['isi'],
            'tags' => $request['tag']
        ]);

        return redirect('/pertanyaan');
    }

    public function destroy($pertanyaan_id){
        question::destroy($pertanyaan_id);
        return redirect('/pertanyaan');
    }
}

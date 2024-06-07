<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\words;
class WordController extends Controller
{
    public function index()
    {
        return view('word.index');
    }
    public function search(Request $request){
        $query = $request->input('query');
        $results = words::where('word','LIKE',"%$query%")->get();
        
        return view('word.index',compact('results'));
    }
}

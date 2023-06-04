<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\note;

class NotesController extends Controller
{
    public function getall(){
    /*
    $notes = DB::table('notes')->where('userid', Auth::user()->email)->get();
    */
    
    $notes = Note::all()->where('userid', Auth::user()->email);
    return view('dashboard', compact('notes'));
    }
}
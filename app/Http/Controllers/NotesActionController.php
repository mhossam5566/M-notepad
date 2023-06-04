<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;
class NotesActionController extends Controller
{

public function edit($id){
// EDIT WITH DB
/*
$note = DB::table('notes')->where('id', $id)->where('userid', Auth::user()->email)->first();
*/
//EDIT WITH MODEL
$note = Note::find($id);
return view('update', compact('note'));

}
    public function update(Request $r, $id){
    
    DB::table('notes')->where('id', $id)->update([
    'title' =>$r->title,
    'content' => $r->content,
    'prv' => $r->prv,
    'updated_at' => DB::raw('NOW()')
    ]);
   return back();
    
    }
    
    public function add(Request $r){
   DB::table('notes')->insert([
    'title' =>$r->title,
    'content' => $r->content,
    'userid' => Auth::user()->email,
    'prv' => $r->prv,
    'created_at' => DB::raw('NOW()'),
    'updated_at' => DB::raw('NOW()')
    ]);
   return back();
    }
    
    
    public function delete(Request $r){
   DB::table('notes')->where('id', $r->id)->where('userid', Auth::user()->email)->delete();
   return back();
    }
    
    public function show($id){
    $note = Note::find($id);
    if($note->prv == 1){
    return view('note', compact('note'));
    }else{
    abort(404);
    }
    }
    
    
}
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\note;
use Illuminate\Support\Facades\Auth;



class NotesController extends Controller
{
    public function index(Request $request){
    
    $user = Auth::user();
    $email = $user->email;
    
    $userData = note::get()->where('userid', $email);
    
     return response()->json($userData);
     
  
    
}
  
}
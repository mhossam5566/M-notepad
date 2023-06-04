<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\note;
use App\models\User;


class MainController extends Controller
{
    public function main(){
    $notes = Note::count();
    $users = User::count();
    
    return view('welcome')->with(['notes' => $notes, 'users' => $users]);
    }
}
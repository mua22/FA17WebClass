<?php

namespace App\Http\Controllers;

use App\Hobby;
use App\Sport;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function hobbies()
    {
        $hobbies = Hobby::all();
        //$hobbies = array('Trekking','Cricket','Football');
         //$sports = array('Trekking','Cricket','Football');
        $sports = Sport::all();
       // $vars = ['hobbies'=>$hobbies];
        //return view('hobbies',$vars);
        //return view('hobbies',compact('hobbies'));
        return view('hobbies')->with(compact('hobbies','sports'));
    }
}

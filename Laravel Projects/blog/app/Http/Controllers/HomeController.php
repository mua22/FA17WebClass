<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $articles = Article::all();
        $articles = Article::with('user')->paginate(5);
        return view('home',compact('articles'));
       // return view('home')->with(compact('articles'));
        //return view('home')->with(['articles'=>$articles]);
    }
}

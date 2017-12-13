<?php

namespace App\Http\Controllers;

use App\University;
use Illuminate\Http\Request;

class UniversitiesController extends Controller
{
    public function index()
    {
        $universities = array(
            ['title'=>'ciit'],
            ['title'=>'LUMS'],
            ['title'=>'LUMS  3 wf ']
        );
        //$universities = University::all();
        $universities = University::paginate(10);

        //$data = ['universities'=>$universities];
        //return view('universities.index')->with($data);
        //return view('universities.index',$data);
        return view('universities.index',compact('universities'));
    }

    public function show(Request $request,$id)
    {
        $university = University::find($id);
        return view('universities.show',compact('university'));

    }
}

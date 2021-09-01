<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assignment;

class AssignmentController extends Controller
{
    public function index(){
        $assignments = Assignment::with('course')->paginate(5);

        return view('web.default.panel.assignments.list',compact('assignments'));
    }

    public function create(){
        return view('web.default.panel.assignments.create');
    }

    public function store(){

    }

    public function download($id){


        $file = Assignment::where('id',$id)->first();
        return response()->download(public_path($file->file));
     }

     public function upload($id){


        $file = Assignment::where('id',$id)->first();
        return view('web.default.panel.assignments.upload',compact('file'));
     }
}

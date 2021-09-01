<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assignment;

class AssignmentController extends Controller
{
    public function index(){
        return view('web.default.panel.assignments.list');
    }

    public function create(){
        return view('web.default.panel.assignments.create');
    }

    public function store(){

    }
}

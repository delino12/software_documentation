<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documentation;

class ExternalPageController extends Controller
{
    /*
    |-----------------------------------------
    | SHOW
    |-----------------------------------------
    */
    public function index(Request $request){
    	// body
    	return view('welcome');
    }
    
    /*
    |-----------------------------------------
    | SHOW
    |-----------------------------------------
    */
    public function loginScreen(Request $request){
    	// body
        return view('auth.index');
    }

    /*
    |-----------------------------------------
    | SHOW
    |-----------------------------------------
    */
    public function project(Request $request){
        // body
        $documentation = Documentation::first();
        return view('project.show', compact('documentation'));
    }
}

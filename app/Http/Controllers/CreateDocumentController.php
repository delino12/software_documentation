<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documentation;

class CreateDocumentController extends Controller
{
    /*
    |-----------------------------------------
    | AUTHENTICATION
    |-----------------------------------------
    */
    public function __construct(){
    	// body
    	$this->middleware('auth');
    }
    
    /*
    |-----------------------------------------
    | SHOW
    |-----------------------------------------
    */
    public function index(Request $request){
    	// body
    	return view("documents.index");
    }

    /*
    |-----------------------------------------
    | SHOW
    |-----------------------------------------
    */
    public function create(Request $request){
        // body
        return view("documents.create");
    }
    
    /*
    |-----------------------------------------
    | SHOW
    |-----------------------------------------
    */
    public function saveDocument(Request $request){
    	// body
    	$documentation 	= new Documentation();
    	$data 			= $documentation->saveDocument($request);

    	// return response
    	return response()->json($data, 200);
    }

    /*
    |-----------------------------------------
    | SHOW
    |-----------------------------------------
    */
    public function readDocument(Request $request){
    	// body
    	$documentation 	= new Documentation();
    	$data 			= $documentation->readDocument($request);

    	// return response
    	return response()->json($data, 200);
    }

    
    /*
    |-----------------------------------------
    | SHOW
    |-----------------------------------------
    */
    public function readOneDocument(Request $request){
    	// body
        $documentation  = new Documentation();
        $data           = $documentation->readOneDocument($request);

        // return response
        return response()->json($data, 200);
    	
    }
    
    /*
    |-----------------------------------------
    | SHOW
    |-----------------------------------------
    */
    public function addOneItem(Request $request){
    	// body
    	
    }
    
    /*
    |-----------------------------------------
    | SHOW
    |-----------------------------------------
    */
    public function deleteDocument(Request $request){
    	// body
        $documentation  = new Documentation();
        $data           = $documentation->deleteDocument($request);

        // return response
        return response()->json($data, 200);
    }
    
    /*
    |-----------------------------------------
    | SHOW
    |-----------------------------------------
    */
    public function extra1(){
    	// body
    	
    }
    
    /*
    |-----------------------------------------
    | SHOW
    |-----------------------------------------
    */
    public function extra2(){
    	// body
    	
    }
    
    /*
    |-----------------------------------------
    | SHOW
    |-----------------------------------------
    */
    public function extra3(){
    	// body
    	
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Documentation extends Model
{
    /*
    |-----------------------------------------
    | SAVE NEW DOCUMENT
    |-----------------------------------------
    */
    public function saveDocument($payload){
    	if($payload->has('document_id') && !empty($payload->document_id)){
    		// process update
    		$data = $this->updateDocument($payload);
    	}else{
    		// save new document
    		$document 				= new Documentation();
            $document->title        = $payload->subject;
    		$document->body 		= $payload->writable;
    		$document->status 		= 1;
    		$document->created_by 	= Auth::user()->id;
    		$document->updated_by 	= Auth::user()->id;
    		if($document->save()){
    			// body
                $last_updated = Documentation::latest()->first();
		    	$data = [
		    		"status" 	=> "success",
		    		"message" 	=> "Document saved!",
                    "data"      => $last_updated
		    	];
    		}else{
    			// body
		    	$data = [
		    		"status" 	=> "error",
		    		"message" 	=> "Error saving document!",
                    "data"      => ""
		    	];
    		}
    	}

    	// return
    	return $data;	
    }

    /*
    |-----------------------------------------
    | READ ALL DOCUMENT
    |-----------------------------------------
    */
    public function readDocument($payload){
    	$documents = Documentation::where('created_by', 1)->get();
        $documents->transform(function($item){
            $item->slug = str_replace(" ", "_", strtolower($item->title));
            return $item;
        });

        // return
    	return $documents;
    }

    /*
    |-----------------------------------------
    | READ ALL DOCUMENT
    |-----------------------------------------
    */
    public function readOneDocument($payload){
        $documents = Documentation::where([['created_by', 1], ['id', $payload->document_id]])->first();
        if($documents !== null){
            // return
            return $documents;
        }else{
            return null;
        }   
    }

    /*
    |-----------------------------------------
    | UPDATE NEW DOCUMENT
    |-----------------------------------------
    */
    public function updateDocument($payload){
    	// body
		$document = Documentation::where('id', $payload->document_id)->first();
		if($document == null){
			$data = [
				"status" 	=> "error",
				"message" 	=> "No document history found!" 
			];
		}else{
            $document->title        = $payload->subject;
			$document->body 		= $payload->writable;
			$document->status 		= 1;
			$document->user_id 		= 1;
			$document->created_by 	= 1;
			$document->updated_by 	= 1;
			if($document->update()){
				// body
		    	$data = [
		    		"status" 	=> "success",
		    		"message" 	=> "Document saved!" 
		    	];
			}else{

				// body
		    	$data = [
		    		"status" 	=> "error",
		    		"message" 	=> "Error saving document!" 
		    	];
			}
		}

		// return
		return $data;
    }

    /*
    |-----------------------------------------
    | DELETE ONE DOCUMENT
    |-----------------------------------------
    */
    public function deleteDocument($payload){
        // body
        $documents = Documentation::where('id', $payload->document_id)->first();
        if($documents !== null){
            // return
            if($documents->delete()){
                $data = [
                    "status"     => "success",
                    "message"    => "Documentation deleted!" 
                ];
            }else{
                $data = [
                    "status"     => "error",
                    "message"    => "Error deleting documentation" 
                ];
            }
        }else{
            $data = [
                "status"     => "error",
                "message"    => "Documentation not found!" 
            ];
        }

        // return
        return $data;
    }
}

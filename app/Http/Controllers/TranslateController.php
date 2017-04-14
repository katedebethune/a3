<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslateController extends Controller
{

    /**
	* GET
    * /
	*/
   public function translate(Request $request) {
	   
	  
	  $this->validate($request, [
            'translateText' => 'required'
        ]);
	   
	   
	
    $translateText = $request->input('translateText', null);
	$suffix = $request->input('suffix');   
 
	
    if($translateText) {
			
		
		if($request->input('option')){
			
			$option = 'checked';
				
		} else { $option = 'unchecked';}
		
		$translation = $this->translateIt($translateText,strtolower($suffix),$option);
		
    }

  
    return view('form')->with([
        'translateText' => $translateText,
		'translation' => $translation
    ]);
}
	
public function translateIt($text,$suffix,$option){

	$words = explode(" ", $text);
	
	foreach($words as &$word) {
		
		if(is_numeric($word)){
			dump($word);
		} else {
		
			$word = $word.$suffix;
		}
	}

	$translation = implode(" ",$words);
	return $translation;
	
}
}



	


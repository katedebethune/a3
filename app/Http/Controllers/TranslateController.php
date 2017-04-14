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
			
		} else {
			
			if(strlen($word) < 3 && $option == 'checked'){
				
			} else {
			
			if($this->startsWithVowel($word)){
				
				$word = $this->shiftForVowel($word);
			} else
				
				if($this->doubleConsonant($word)){
					
					$word = $this->shiftForDouble($word,$suffix);
					
				} else {
					
				$word = $this->shiftForSingle($word,$suffix);
				
				}
				
			}
		}
	}

	$translation = implode(" ",$words);
	return strtolower($translation);
	
}
	
	public function startsWithVowel($word){
		
		$vowels = ['a','e','i','o','u'];
		
		if(in_array($word{0},$vowels)){
		
		return 'true';
			
		} 
		
	}
	
	public function shiftForVowel($word){
		
		$newWord = $word.'way';
		
		return $newWord;	
	}
	
	
	public function doubleConsonant($word){
		
		$vowels = ['a','e','i','o','u'];
		
		if(in_array($word{1},$vowels)){
		
		return false;
			
		} else {return true;}
	}
	
	
	public function shiftForDouble($word,$suffix){
		
		$arr = str_split($word);
		
		array_push($arr,$arr[0]);
		array_shift($arr);
		array_push($arr,$arr[0]);
		array_shift($arr);
		
		$newWord = implode("",$arr);
		$newWord = $newWord.$suffix;
		
		return $newWord;
	}
	
	public function shiftForSingle($word,$suffix){
		
		$arr = str_split($word);
		
		array_push($arr,$arr[0]);
		array_shift($arr);
		
		$newWord = implode("",$arr);
		$newWord = $newWord.$suffix;
		
		return $newWord;
	}
}




	


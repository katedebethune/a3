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
            'translateText' => 'required|min:3|alpha_num'
        ]);
	   
	  
	   
	
    $translateText = $request->input('translateText', null);
	   
 
	
    if($translateText) {
			
		
    }

  
    return view('form')->with([
        'translateText' => $translateText
    ]);
}
}

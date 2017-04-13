<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{

    /**
	* GET
    * /
	*/
   public function translate(Request $request) {

	   
    $translateText = $request->textarea('translateText', null);
   
    if($translateText) {
			
		
    }

  
    return view('form')->with([
        'translateText' => $translateText
    ]);
}
}

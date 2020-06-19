<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class AppoinmentController extends Controller
{
    //
    public function make(Request $req)
    {
		$name = $req->name;
		$msg = $req->message;

		$res = 'Name:'.$name.'  Message:'.$msg;    	
		
		$status = file_get_contents('https://api.telegram.org/bot1190730780:AAE1CC_xkmUx7CrrHHtuUBc9LFkYmFYUMRY/sendMessage?chat_id=1084331304&text='.$res
		);
    	return redirect()->back();
    }
}

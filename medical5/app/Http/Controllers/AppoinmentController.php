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
        $arr = explode(",",$req->location);
        $lang =$arr[1];
        $lat = $arr[0];
        $chat_id = '817236320';

		$res = 'Name:'.$name.'  Message:'.$msg;

		$status = file_get_contents('https://api.telegram.org/bot1190730780:AAE1CC_xkmUx7CrrHHtuUBc9LFkYmFYUMRY/sendMessage?chat_id='.$chat_id.'&text='.$res
        );
        $status2 = file_get_contents('https://api.telegram.org/bot1190730780:AAE1CC_xkmUx7CrrHHtuUBc9LFkYmFYUMRY/sendLocation?chat_id='.$chat_id.'&longitude='.$lang.'&latitude='.$lat);
    	return response()->json(['info'=>$status,'location'=>$status2]);
    }
}

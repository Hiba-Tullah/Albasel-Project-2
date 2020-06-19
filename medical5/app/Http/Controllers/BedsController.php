<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bed;

class BedsController extends Controller
{
    public function __construct()
    {

    	return $this->middleware('auth');
    }
    public function getAll()
    {
    	$first= Bed::all()->where('floor',1);
    	$second=Bed::all()->where('floor',2);
    	$third=Bed::all()->where('floor',3);
    	//return $first;
    	return view('roomD',compact(
    		'first','second','third'));
    }
    public function changeStatus(Request $request)
    {
    	$id = $request->id;
    	$bed= Bed::find($id);

    	$bed->status = abs(abs($bed->status)-1);
    	$bed->save();

    	return redirect()->back();
    }
}

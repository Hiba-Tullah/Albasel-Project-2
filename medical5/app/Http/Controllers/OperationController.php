<?php

namespace App\Http\Controllers;

use App\Operation;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Operation::all();
        return view('SOO',compact('data'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $item  = new Operation();
        $item->p_name = $request->p_name;
        $item->details = $request->details;
        $item->date=$request->date;

        $item->save();
        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $item  = Operation::find($id);
        $item->p_name = $request->p_name;
        $item->details = $request->details;
        $item->date=$request->date;

        $item->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Operation::destroy($id);
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Duty;
use Illuminate\Http\Request;

class Duties extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type= $_GET['type'];
        $data = Duty::all()->where('type',$type);
        return view('specialized',compcat('data'));
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
        $item = new Duty();
        $item->type = $request->type;
        $item->details = $request->details;
        $item->name=$request->name;

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
        $item=Duty::find($id);
        $item->type = $request->type;
        $item->details = $request->details;
        $item->name=$request->name;

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
        Duty::destroy($id);
        return redirect()->back();

    }
}

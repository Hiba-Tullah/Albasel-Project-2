<?php

namespace App\Http\Controllers;

use App\MedicalHistory;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\String_;

class HistoryController extends Controller
{
    //
    public function index()
    {
        $data = MedicalHistory::all()->where('user_id',Auth::user()->id)->first();
        return view('orderSS',compact('data'));
    }
    public function store(Request $request)
    {
        MedicalHistory::where('user_id',Auth::user()->id)->delete();
        $item = new MedicalHistory();
        $item->user_id = Auth::user()->id;
        if ($request->has('xray')) {
            $path=$request->xray->store('public/images');

            $npath=str_replace('public/','storage/',$path);
            $item->xray = $npath;
        }

        if ($request->has('blood')) {
            $path=$request->blood->store('public/images');

            $npath=str_replace('public/','storage/',$path);
            $item->blood = $npath;
        }

        if ($request->has('heart')) {
            $path=$request->heart->store('public/images');

            $npath=str_replace('public/','storage/',$path);
            $item->heart = $npath;
        }
        $item->history=$request->history==null?"   ":$request->history;

        $item->save();
        return redirect()->back();
    }

}

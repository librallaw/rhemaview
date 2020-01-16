<?php

namespace App\Http\Controllers;

use App\Rhema;
use App\Rhemastars;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class RhemastarsController extends Controller
{
    public function rhemastars(){
        return view('rhemastars');
    }

    public function rhemastars_table(){
        $rhemastars = Rhemastars::get();
        return view('rhemastars_table', compact('rhemastars'));
    }


    public function post_rhemastars(Request $request){


        Validator::make($request->all(),[
            'image' => 'required|image|mimes:jpeg,jpg|max:2048',
            'name' => 'required',
            'country' => 'required',
            'month' => 'required',
            'year' => 'required',

        ]);


        //dd($request->country);



        $imageName = time(). '.' . request()->image->getClientOriginalExtension();

        Image::make(request()->image)->save(public_path('/img/').$imageName);

        //dd($request->country);

        Rhemastars::create([
            'image' => $imageName,
            'name' => $request->name,
            'country' => $request->country,
            'month' => $request->month,
            'year' => $request->year,
        ]);


        return redirect()->back()->withSuccess('Rhema Stars uploaded successfully');
    }
}

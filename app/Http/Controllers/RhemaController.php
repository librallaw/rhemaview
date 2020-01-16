<?php

namespace App\Http\Controllers;

use App\Rhema;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class RhemaController extends Controller
{
    public function rhema(){
        return view('rhema');
    }

    public function post_rhema(Request $request){


        Validator::make($request->all(),[
            'image' => 'required|image|mimes:jpeg,jpg|max:2048',
            'title' => 'required',
            'opening_text' => 'required',
            'author' => 'required',
            'article' => 'required',
            'date' => 'required'
        ]);




        $imageName = time(). '.' . request()->image->getClientOriginalExtension();

         Image::make(request()->image)->save(public_path('/img/').$imageName);

        Rhema::create([
            'image' => $imageName,
            'title' => $request->title,
            'opening_text' => $request->opening_text,
            'author' => $request->author,
            'article' => $request->article,
            'date' => $request->date,
        ]);


        return redirect()->back()->withSuccess('Rhema Uploaded successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Testimony;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class TestimonyController extends Controller
{
    public function testimony(){
        return view('testimony');
    }

    public function testimony_table(){
        $testimonies = Testimony::get();
        return view('testimony_table', compact('testimonies'));
    }

    public function post_testimony(Request $request){

        Validator::make($request->all(),[
            'image' => 'required|image|mimes:jpeg,jpg|max:2048',
            'name' => 'required',
            'country' => 'required',
            'testimony' => 'required'

        ]);


        $imageName = time(). '.' . request()->image->getClientOriginalExtension();

        Image::make(request()->image)->save(public_path('/img/').$imageName);

        Testimony::create([
            'image' => $imageName,
            'name' => $request->name,
            'country' => $request->country,
            'testimony' => $request->testimony,
        ]);


        return redirect()->back()->withSuccess('Testimonials Uploaded successfully');
    }
}

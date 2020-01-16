<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function gallery(){
        return view('gallery');
    }

    public function gallery_table(){
        $galleries = Gallery::get();
        return view('gallery_table', compact('galleries'));
    }

    public function post_gallery(Request $request){

        Validator::make($request->all(),[
            'image' => 'required|image|mimes:jpeg,jpg|max:2048',
            'title'=> 'required',

        ]);


        $imageName = time(). '.' . request()->image->getClientOriginalExtension();

        Image::make(request()->image)->save(public_path('/img/').$imageName);

        Gallery::create([
            'title' => $request->title,
            'image' => $imageName,

        ]);

        return redirect()->back()->withSuccess('Gallery Uploaded successfully');
    }
}

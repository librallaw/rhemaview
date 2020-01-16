<?php

namespace App\Http\Controllers;

use App\Outreach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class OutreachController extends Controller
{
    public function outreach(){
        return view('outreach');
    }

    public function outreach_table(){
        $outreachs = Outreach::get();
        return view('outreach_table', compact('outreachs'));
    }

    public function post_outreach(Request $request){


        Validator::make($request->all(),[
            'location' => 'required',
            'title' => 'title',
            'short' => 'required',
            'date' => 'required',
        ]);




//        $imageName = time(). '.' . request()->image->getClientOriginalExtension();
//
//       Image::make(request()->image)->save(public_path('/img/').$imageName)->resize('203', '419');

        Outreach::create([
            'location' => $request->location,
            'title' => $request->title,
            'short' => $request->short,
            'date' => $request->date,
        ]);


        return redirect()->back()->withSuccess('Outreachs uploaded successfully');
    }
}

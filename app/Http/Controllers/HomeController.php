<?php

namespace App\Http\Controllers;


use App\Gallery;
use App\Outreach;
use App\Rhemastars;
use App\Testimony;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $gallery = Gallery::get();
        $testimonial = Testimony::get();
        $outreachs = Outreach::get();
        $rhemastars = Rhemastars::get();
        return view('home', compact('gallery', 'testimonial', 'outreachs', 'rhemastars'));
    }
}

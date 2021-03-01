<?php

namespace App\Http\Controllers;

use App\Lifestyle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $id = Auth::user()->id;
        $showAbout=Lifestyle::where('user_id',$id)->first();


        return view('frontend.user.view_profile', compact('showAbout'));
    }
}

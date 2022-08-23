<?php

namespace App\Http\Controllers;
use App\Models\News;

class NewsController extends Controller
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
        $new = News::all();
        // return view('home');
        return view('adminpage.adminnews.news' , compact('new'));
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Promotion;

class PromotionController extends Controller
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
        $promo = Promotion::all();
        // return view('home');
        return view('adminpage.adminpromotion.promotion', compact('promo'));
    }
}
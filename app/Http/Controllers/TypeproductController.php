<?php

namespace App\Http\Controllers;
use App\Models\TypeProduct;


class TypeproductController extends Controller
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
        $type = TypeProduct::all();
        
        // return view('home');
        return view('adminpage.admintypeproduct.typeproduct' , compact('type'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\TypeProduct;
use Illuminate\Http\Request;


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

    public function formadd(){
        return view('adminpage.admintypeproduct.add');
    }
    
    public function add(Request $request){
        $request->validate([
                'name' => 'nullable',
                'detail' => 'nullable',
        ]);
        typeproduct::create($request->all());
        return redirect()->route('adminpage.admintypeproduct.typeproduct')
        ->with('success','product created succcessfully');
    }
}
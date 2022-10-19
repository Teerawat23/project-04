<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
    public function formadd(){
        return view('adminpage.adminpromotion.add');
    }
    
    public function add(Request $request){
        $request->validate([
                'picture'=>'null',
                'name' => 'nullable',
                'detail' => 'nullable',
        ]);
        Promotion::create($request->all());
        return redirect()->route('adminpage.adminpromotion.promotion')
        ->with('success','product created succcessfully');
    }
}
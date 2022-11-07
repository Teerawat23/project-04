<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;


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
        $promotion = new Promotion();

        $promotion->name = $request->name;

        $promotion->detail = $request->detail;

        if ($request->hasFile('picture')) {

            $filename = Str::random(10) . '.' . $request->file('picture')->getClientOriginalExtension();   //025G025365.jpg

            $request->file('picture')->move(public_path() . '/admin/upload/promotion/', $filename);

            Image::make(public_path() . '/admin/upload/promotion/' . $filename);

            $promotion->picture = $filename;

        } else {

            $promotion->picture = 'nopic.jpg';

        }

        $promotion->save();


        return redirect()->route('adminpage.adminpromotion.promotion');
    }

    public function edit($id){
        $promotion = Promotion::find($id);
        return view('adminpage.adminpromotion.edit',compact('promotion'));
    }

    public function update(Request $request, $id){
        $promotion = Promotion::find($id);
        $promotion->name = $request->name;
        $promotion->detail = $request->detail;
        $promotion->update();
        return redirect()->route('adminpage.adminpromotion.promotion');
    }
    }

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class ProductController extends Controller
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
        $product = Product::all();
        // return view('home');
        return view('adminpage.adminproduct.product', compact('product'));
    }
//c
    public function formadd(){
        return view('adminpage.adminproduct.add');
    }
    
    public function add(Request $request){
        // $request->validate([
        //         // 'picture'=>'null',
        //         'name' => 'nullable',
        //         'detail' => 'nullable',
        //         // 'typeproduct'=>'null',
        //         'price' => 'nullable',
        //         'amount' => 'nullable'
        // ]);
        // product::create($request->all());
        // return redirect()->route('adminpage.adminproduct.product')
        // ->with('success','product created succcessfully');

        // $product = new Product();
        // $product->name = $request->name;
        // $product->price = $request->price;
        // $product->typeproduct = $request->typeproduct;
        // $product->amount = $request->amount;
        // if($request->hasFile('image')){

        // $image = Str::random(16).'.'. $request->file('picture')->getClientOriginalExtension() ;
        // $request->file('image')->move(public_path().'/admin/upload/product/'.$product->$image);
        // Image::make(public_path().'/admin/upload/product/');
        // $product->picture = $image;
        // }else{
        //     $product->picture = '';
        // }
        // $product->save();

        $product = new Product();

        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->typeproduct = $request->typeproduct;
        $product->price = $request->price;
        $product->amount = $request->amount;


        if ($request->hasFile('picture')) {

            $filename = Str::random(10) . '.' . $request->file('picture')->getClientOriginalExtension();   //025G025365.jpg

            $request->file('picture')->move(public_path() . '/admin/upload/product/', $filename);

            Image::make(public_path() . '/admin/upload/product/' . $filename);

            $product->picture = $filename;

        } else {

            $product->picture = 'nopic.jpg';

        }

        $product->save();


        return redirect()->route('adminpage.adminproduct.product');
    }
    public function delete($id){
        $product = product::find($id);
        if($product->image != 'nopic.png'){
            Flie::delete(public_path().'/admin/upload/product/'.$product->$image);
        $product->delete();
        return redirect()->route('adminpage.adminproduct.product');
    }


}
public function edit($id){
    $product = Product::find($id);
    return view('adminpage.adminproduct.edit',compact('proproduct'));
}

public function update(Request $request, $id){
    $product = Product::find($id);
    $product->name = $request->name;
    $product->detail = $request->detail;
    $product->price = $request->price;
    $product->amount = $request->amount;
    $product->story = $request->story;
    $product->type = $request->type;
    $product->update();
    return redirect()->route('adminpage.adminproduct.product');
}
}
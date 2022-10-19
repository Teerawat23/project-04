<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\HTTp\Request;
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

    public function formadd(){
        return view('adminpage.adminnews.add');
    }
    
    public function add(Request $request){
        $request->validate([
            'picture' =>'nullable',
            'name' => 'nullable',
            'detail' => 'nullable',
        ]);
        news::create($request->all());
        return redirect()->route('adminpage.adminnews.news')
        ->with('success','news created succcessfully');
    }
}

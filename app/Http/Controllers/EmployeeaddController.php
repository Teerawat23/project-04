<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class EmployeeaddController extends Controller
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
        $employee = user::all();
        // return view('home');
        return view('adminpage.adminemployee.add');
    }
}

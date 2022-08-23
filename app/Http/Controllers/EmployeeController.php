<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use UnitEnum;

class EmployeeController extends Controller
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
        $employee = User::all();

        // return view('home');
        return view('adminpage.adminemployee.employee' , compact('employee'));
    }
}

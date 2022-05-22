<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Teacher;
class HomeController extends Controller
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
        if(Auth::user()->role == "Admin"){
            return redirect()->route('admin.index');
        }
        return view('home');
    }

    public function admin()
    {
        $teacher = Teacher::count();
        $maleTeacher = Teacher::where('gender', 'Male')->count();
        $femaleTeacher  = Teacher::where('gender', 'Female')->count();
        return view('admin.index', compact('teacher', 'maleTeacher', 'femaleTeacher'));
    }
}

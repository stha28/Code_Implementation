<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Bikes;

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
        return view('welcome');
    }

    public function blog()
    {
        $blog=blog::all();
        return view('Blog', compact('blog'));
    }

    public function about()
    {
        return view('Aboutus');
    }

    public function service()
    {
        return view('Services');
    }

    public function home()
    {
        return view('admin.adminDash');
    }

    

}

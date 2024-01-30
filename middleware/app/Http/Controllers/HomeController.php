<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index(Request $request)
    {
        //request->session()->get('tony');
        //echo $request->session()->all();

        // session(['tony'=>'master_instructor']);
        // echo session('tony1');

       // return view('home');
        //$request->session()->forget('tony1');
    //     $request->session()->flush();
    //    return $request->session()->all();
    //  $request->session()->flash('message', 'Post has been created');
       /// return $request->session()->get('message');

    //    $request->session()->reflash();
       
    //    $request->session()->keep('message');

    }
}

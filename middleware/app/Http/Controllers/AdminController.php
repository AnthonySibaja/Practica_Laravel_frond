<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware;


class AdminController extends Controller
{

    public function __construct(){
        $this->middleware('IsAdmin');

    }

    public function index(){
        return "eres un administrador";


    }
}

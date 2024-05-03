<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $pageTitle ="Beranda";
        return view('Home',['pageTitle'=> $pageTitle]);
    }
}

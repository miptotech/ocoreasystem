<?php

namespace ocorea\Http\Controllers;

use Illuminate\Http\Request;

use ocorea\Http\Requests;
use ocorea\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
}

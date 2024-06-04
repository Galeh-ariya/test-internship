<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class DashboardController extends Controller
{
    //
    public function index()
    {
       
        return view('index');
    }

    public function insert()
    {
       
        return view('insert');
    }

    public function addAll(Request $Request) {
        dd($Request->input('name'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(){
        return view('admin.data');
    }

    public function create(){
        return view('admin.data-create');
    }
}

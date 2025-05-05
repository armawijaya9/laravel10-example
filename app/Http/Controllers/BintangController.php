<?php

namespace App\Http\Controllers;

use App\Models\Bintang;
use Illuminate\Http\Request;

class BintangController extends Controller
{
    public function index(){


        $lists = Bintang::all();

        return view('bintang', compact('lists'));
    }
}

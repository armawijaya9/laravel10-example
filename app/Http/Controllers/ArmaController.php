<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArmaController extends Controller
{
    public function index(){

        $friends = [
            [
                "name" => "Bintang",
                "prodi" => "Teknik Informatika",
            ],
            [
                "name" => "Fery",
                "prodi" => "Teknik Informatika",
            ],
            [
                "name" => "Faisal",
                "prodi" => "Teknik Informatika",
            ],
            [
                "name" => "Sembarang",
                "prodi" => "Teknik Informatika",
            ],
        ];

        return view('arma', [
            'friends' => $friends,
        ]);
    }
}

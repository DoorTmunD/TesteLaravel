<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $P1, int $P2) {
       // echo "A soma de $P1 + $P2 é:" .($P1 + $P2);
       // return view('site.teste', ['p1'=> $P1, 'p2' => $P2]); //array associativo

       // return view('site.teste', compact('p1','p2'));  //compact (mais usado)

        return view('site.teste')->with('P1',$P1)->with('P2',$P2); //with
    }
}

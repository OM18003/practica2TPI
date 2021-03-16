<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CirculoController extends Controller
{
    private $radio;
    private $centroX;
    private $centroY;


    public function area(){
        return 2;        
    }

    public function perimetro(Request $request)
    {
        
    }
}

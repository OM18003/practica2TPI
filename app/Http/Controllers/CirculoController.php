<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CirculoController extends Controller
{
    private $radio;
    private $centroX;
    private $centroY;

    public function __construct($radio,$centroX,$centroY) {
        $this->$radio = $radio;
        $this->$centroX = $centroX;
        $this->$centroY = $centroY;
    }

    public function area(){
        return (($this->radio)**2)*pi();
    }

    public function perimetro()
    {
        return 2*(pi())**$this->radio;
    }
}

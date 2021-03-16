<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\CirculoController;

class CirculoControllerTest extends TestCase
{
    private $circulo;

    public function __construct() {
        $this->circulo = new CirculoController(2,2,2);
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_area()
    
    {
        $areaResultado = $this->circulo->area();
        $this->assertTrue($areaResultado==2);
    }

    public function test_perimetro()
    {
        
    }
}

<?php

namespace Tests\Feature;

use App\Http\Controllers\CirculoController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CirculoControllerTest extends TestCase
{
    private $circulo;

    // public function __construct()
    // {
    //     $this->circulo = new CirculoController(0.7978845608, 2, 2);
    // }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_area()

    {
        $this->circulo = new CirculoController(2, 2, 2);
        $areaResultado = $this->circulo->area();      
        $this->assertEquals($areaResultado, 12.566370614359);
    }
    
    public function test_perimetro()
    {
        $this->circulo = new CirculoController(2, 2, 2);
        $perimetroResultado = $this->circulo->perimetro();                
        $this->assertEquals($perimetroResultado, 19.739208802179);
    }
}

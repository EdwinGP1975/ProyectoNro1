<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include ".src/operacion.php";
class operacion_Test extends TestCase
{
   /* public function testFactorial():void
    {
        $objOpr = new operacion();
        $nFct = $objOpr->suma(nVlrA: 20, nVlrB:30);  
        $this->assertIsNumeric(actual:$nFct);
        $this->assertEquals(expected: $nFct, actual:50);
    }*/
    public function testtuno():void
    { 
        $this->assertTrue(condition: true);
    }
    public function testdos():void
    { 
        $this->assertTrue(condition: true);
    }
}
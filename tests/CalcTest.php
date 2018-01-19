<?php

use PHPUnit\Framework\TestCase;
use Sample\Calc;

class CalcTest extends TestCase
{
    public function testAdd()
    {
      $calc = new Calc();
      $this->assertEquals($calc->add(3,2),5);
      $this->assertEquals($calc->sub(3,2),1);
      $this->assertEquals($calc->mul(3,2),6);
      $this->assertEquals($calc->div(3,2),1.5);
      $this->assertEquals($calc->div(3,0),0);
    }
}
?>

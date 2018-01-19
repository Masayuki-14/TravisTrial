<?php

use PHPUnit\Framework\TestCase;
use Sample\Calc;

class CalcTest extends TestCase
{
    public function testAdd()
    {
      $calc = new Calc();
      $this->assertEquals($calc->sub(100,2),3);
    }
}
?>

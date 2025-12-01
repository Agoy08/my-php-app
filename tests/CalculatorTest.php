<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testTambah()
    {
        $calc = new Calculator();
        $hasil = $calc->tambah(2, 3);

        $this->assertEquals(5, $hasil);
    }
}

<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use mana\Math;


class MyMathTest extends TestCase
{
//    /** @var myMathApp */
//    public $myMathApp;
//
//    public function setUp(): void
//    {
//        parent::setUp(); 
//
//        $this->myMathApp = new Math();
//    }

    /**
     * @return void
     * @covers Math::fibonacci
     */
    public function testFibonacci() :void
    {
        // arrange
        $this->myMathApp = new Math();
        // expect
        $expect = 139583862445;
        // act
        $act = $this->myMathApp->fibonacci(55);
        // assert
        $this->assertEquals($expect,$act);
        
        //with setup
        //$this->assertEquals(139583862445, $this->myMathApp->fibonacci(55));
    }

    /**
     * @return void
     * @covers Math::factorial
     */
    public function testFactorial() :void
    {
        //arrange
        $this->myMathApp = new Math();
        // expect
        $expect = 120;
        // act
        $act = $this->myMathApp->factorial(5);
        // assert
        $this->assertEquals($expect,$act);

        //with setup
        //$this->assertEquals(120, $this->myMathApp->factorial(5));
    }

     /**
     * test with data from dataProvider
     * @dataProvider providerFibonacci
     * @covers Math::fibonacci
     */
    public function testFibonacciWithDataProvider($n, $result) {
        $math = new Math();
        $this->assertEquals($result, $math->fibonacci($n));
    }
    /**
     * @return int[][]
     */
    public function providerFibonacci() {
        return array(
            array(1, 1),
            array(2, 1),
            array(3, 2),
            array(4, 3),
            array(5, 5),
            array(6, 8),
        );
    }

    /**
     * @return void
     * @covers Math::fibonacci
     */
    public function testExceptionsForNegativeNumbers() {
        $this->expectException(InvalidArgumentException::class);
        $math = new Math();
        $math->fibonacci(-1);
    }

    /**
     * @return void
     * @covers Math::factorial
     */
    public function testFailedForZero() {
        $this->expectException(InvalidArgumentException::class);
        $math = new Math();
        $math->factorial(0);
    }
}
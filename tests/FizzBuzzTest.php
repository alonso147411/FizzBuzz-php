<?php

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\Example;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private $example;
    protected function setUp(): void
    {
        // Creamos una instancia de la clase Example antes de cada prueba
        $this->example = new Example();
    }
    /**
     * @test
     */
    public function trueAssertion()
    {
        $example = new Example();

        $integerValue = $example->integerChecker(1);

        $this->assertTrue($integerValue);
    }

    /**
     * @test
     */
    public function falseAssertion()
    {
        $example = new Example();

        $integerValue = $example->integerChecker('1');

        $this->assertFalse($integerValue);
    }

    /**
     * @test
     */
    public function equalsAssertion()
    {
        $example = new Example();

        $integerValue = $example->integerChecker(1);

        $this->assertEquals(true, $integerValue);
    }
    /**
     * @test
     */
    public function multipleOfThreeReturnsFizz()
    {
        // Probamos el caso cuando el número es divisible por 3
        $this->assertEquals('Fizz', $this->example->fizzbuzz(3));
        $this->assertEquals('Fizz', $this->example->fizzbuzz(6));
        $this->assertEquals('Fizz', $this->example->fizzbuzz(9));
    }
    /**
     * @test
     */
    public function multipleOfFiveReturnsBuzz()
    {
        // Probamos el caso cuando el número es divisible por 5
        $this->assertEquals('Buzz', $this->example->fizzbuzz(5));
        $this->assertEquals('Buzz', $this->example->fizzbuzz(10));
        $this->assertEquals('Buzz', $this->example->fizzbuzz(20));
    }
    /**
     * @test
     */
    public function multipleOfFiveAndThreeReturnsFizzBuzz()
    {
        // Probamos el caso cuando el número es divisible tanto por 3 como por 5
        $this->assertEquals('FizzBuzz', $this->example->fizzbuzz(15));
        $this->assertEquals('FizzBuzz', $this->example->fizzbuzz(30));
        $this->assertEquals('FizzBuzz', $this->example->fizzbuzz(45));
    }
    /**
     * @test
     */
    public function testOtherNumbers()
    {
        // Probamos los casos donde el número no es divisible ni por 3 ni por 5
        $this->assertEquals('1', $this->example->fizzbuzz(1));
        $this->assertEquals('2', $this->example->fizzbuzz(2));
        $this->assertEquals('7', $this->example->fizzbuzz(7));
        $this->assertEquals('8', $this->example->fizzbuzz(8));
    }
    /**
     * @test
     */
    public function testInvalidInput()
    {
        // Probamos un valor que no sea un entero
        $this->assertEquals('Invalid', $this->example->fizzbuzz('not a number'));
    }

}
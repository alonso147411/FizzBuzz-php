<?php

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzzKata;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private  $fizzBuzz;
    protected function setUp(): void
    {
        // Creamos una instancia de la clase Example antes de cada prueba
       parent::setUp();
       $this->fizzBuzz = new FizzBuzzKata();
    }

    /**
     * @test
     */
    public function multipleOfThreeReturnsFizz(): void
    {
        $result = $this->fizzBuzz->convert(6);
        $this->assertEquals('Fizz', $result);

    }
    /**
     * @test
     */
    public function multipleOfBuzzNumberReturnsBuzz(): void
    {
        $result = $this->fizzBuzz->convert(10);
        $this->assertEquals('Buzz', $result);

    }
    /**
     * @test
     */
    public function multipleOfBuzzNumberAndFizzNumberReturnsFizzBuzz(): void
    {
        $result = $this->fizzBuzz->convert(30);
        $this->assertEquals('FizzBuzz', $result);

    }
    /**
     * @test
     */
    public function notMultipleOfFizzNumberOrBuzzNumberReturnNumber(): void
    {
        $result = $this->fizzBuzz->convert(1);
        $this->assertEquals(1, $result);

    }


}
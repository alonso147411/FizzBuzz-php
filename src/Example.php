<?php

namespace Deg540\CleanCodeKata9;

class Example
{
    /**
     * @param $value
     *
     * @return bool
     */
    function integerChecker($value): bool
    {
        return is_integer($value);
    }

    function isFizz(): string
    {
        return "Fizz";

    }
    function isBuzz(): string
    {
        return "Buzz";
    }

    function isFizzBuzz(): string
    {
        return "FizzBuzz";
    }


    function fizzbuzz($numero): string
    {
        if (!is_int($numero)) {
            return "Invalid";
        }
        if ($numero % 3 == 0 && $numero % 5 == 0){
            return $this->isFizzBuzz();
        }
        elseif ($numero % 3 == 0){
            return $this->isFizz();
        }
        elseif ($numero % 5 == 0){
            return $this->isBuzz();
        }
       return strval($numero);
    }
}

<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzzKata
{

    private const BUZZ_NUMBER = 5;
    private const FIZZ_NUMBER = 3;

    public function __construct()
    {
    }

    public function convert(int $number): ?string
    {
        if ($this->isFizzBuzz($number)) {
            return 'FizzBuzz';
        }
        if ($this->isBuzz($number)) {
            return 'Buzz';
        }
        if ($this->isFizz($number)) {
            return 'Fizz';
        }
        return $number;
    }

    /**
     * @param int $number
     * @return bool
     */
    private function isBuzz(int $number): bool
    {
        return $number % self::BUZZ_NUMBER === 0;
    }

    /**
     * @param int $number
     * @return bool
     */
    private function isFizz(int $number): bool
    {
        return $number % self::FIZZ_NUMBER === 0;
    }

    /**
     * @param int $number
     * @return bool
     */
    private function isFizzBuzz(int $number): bool
    {
        return $this->isFizz($number) && $this->isBuzz($number);
    }

}
<?php
namespace App\Filter;

class IT implements FilterInterface
{
    const LABEL = 'IT';

    /**
     * Match wheter a number is multiples of 5 - function
     *
     * @param integer $number
     * @return bool
     */
    public function match(int $number) : bool
    {
        return (($number % 5) == 0);
    }

    /**
     * Get IT Message on Match function
     *
     * @return string
     */
    public function getLabel() : string
    {
        return self::LABEL;
    }
}

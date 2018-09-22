<?php
namespace App\Filter;

class Linio implements FilterInterface
{
    const LABEL = 'Linio';

    /**
     * Match wheter a number is multiples of 3 - function
     *
     * @param integer $number
     * @return bool
     */
    public function match(int $number) : bool
    {
        return (($number % 3) == 0);
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

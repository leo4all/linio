<?php
namespace App\Filter;

class Linianos implements FilterInterface
{
    const LABEL = 'Linianos';

    /**
     * Match wheter a number is multiples of 3 and 5 - function
     *
     * @param integer $number
     * @return bool
     */
    public function match(int $number) : bool
    {
        return ((($number % 3) == 0) && (($number % 5) == 0));
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

<?php
namespace App;

use App\Filter\ { IT, Linio, Linianos };

class Controller
{
    private $filters = [];

    /**
     * Construct
     */
    public function __construct()
    {
        $this->filters = [
            new Linianos,
            new Linio,
            new IT,
        ];
    }

    /**
     * Render IT || LINIO || LINIANOS || NUMBER function
     *
     * @param [int] $start
     * @param [int] $end
     * @return void
     */
    public function getDisplay(int $start = 1, int $end = 100) : void
    {
        for ($start; $start <= $end; $start++) {
            foreach ($this->filters as $filter) {
                if ($filter->match($start)) {
                    echo $filter->getLabel().PHP_EOL;
                    continue 2;
                }
            }
            echo $start.PHP_EOL;
        }
    }
}

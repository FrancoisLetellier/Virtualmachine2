<?php
/**
 * Created by PhpStorm.
 * User: topikana
 * Date: 09/05/17
 * Time: 10:14
 */

namespace wcs;


class Laptop extends Computer implements MobileComputerInterface
{
    private $weight;

    public function __construct($proc, $memory)
    {
        parent::__construct($proc, $memory);
    }

    public function display()
    {
        parent::display();
            echo "Weight : " . $this->getWeight() . " Kg" . PHP_EOL;
    }

    function setWeight($weight)
    {
        if (1 >= $weight or $weight >= 3) {
            throw new \Exception("le poids doit être compris entre 1 Kg et 3 Kg");
        }
        $this->weight = $weight;
        return $this;
    }

    function getWeight()
    {
        return $this->weight;
    }
}
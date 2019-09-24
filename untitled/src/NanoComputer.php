<?php
/**
 * Created by PhpStorm.
 * User: topikana
 * Date: 09/05/17
 * Time: 10:42
 */

namespace wcs;


class NanoComputer extends Computer implements MobileComputerInterface
{
    private $weight;


    public function display()
    {
        parent::display();
        echo "Weight : " . $this->getWeight() . "g " . PHP_EOL;
    }



    function setWeight($weight)
    {
        if (50 >= $weight or $weight >= 1000) {
            throw new \Exception("le poids doit être compris entre 50 g et 1000 g");
        }
        $this->weight = $weight;
        return $this;
    }

    function getWeight()
    {
        return $this->weight;
    }
}
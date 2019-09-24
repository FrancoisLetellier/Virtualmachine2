<?php
/**
 * Created by PhpStorm.
 * User: topikana
 * Date: 09/05/17
 * Time: 11:05
 */

namespace wcs;


class DesktopComputer extends Computer implements DesktopComputerInterface
{
    private $case;

    public function __construct($proc, $memory)
    {
        parent::__construct($proc, $memory);
    }

    public function display()
    {
        parent::display();
        echo "Case : " . $this->getCase() . PHP_EOL;
    }

    function setCase($case)
    {
        $this->case = $case;
        return $this;
    }

    function getCase()
    {
        return $this->case;
    }
}
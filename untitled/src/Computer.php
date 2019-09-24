<?php
/**
 * Created by PhpStorm.
 * User: topikana
 * Date: 09/05/17
 * Time: 10:08
 */

namespace wcs;


abstract class Computer
{
    private $memory;
    private $proc;
    private $modele;

    public function __construct($proc, $memory)
    {
        $this->memory = $memory;
        $this->proc = $proc;
    }


    public function display()
    {
        echo PHP_EOL;
        echo "Model : " . $this->getModele() . "(" . $this->getClassSortName() . ")". PHP_EOL;
        echo "Proc : " . $this->getProc() . PHP_EOL;
        echo "Memory : " . $this->getMemory() . PHP_EOL;
    }
    /**
     * @return mixed
     */
    public function getProc()
    {
        return $this->proc;
    }

    /**
     * @param mixed $proc
     */
    public function setProc($proc)
    {
        $this->proc = $proc;
    }

    /**
     * @return mixed
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * @param mixed $memory
     * @return Computer
     */
    public function setMemory($memory)
    {
        $this->memory = $memory;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     * @return Computer
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
        return $this;
    }

    public function getClassSortName()
    {
        $name = explode("\\", get_class($this));
        return $name[count($name) -1];
    }

}
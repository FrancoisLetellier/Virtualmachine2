<?php

namespace FrancoisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}/{lastName}",name="home")
     */
    public function indexAction($name, $lastName)
    {
        return $this->render('FrancoisBundle:Default:index.html.twig',
            ["firstname" => $name, "lastName" => $lastName]
    );
    }
    /**
     * @Route("/bye/{name}/{lastName}",name="bye")
     */
    public function byeAction($name, $lastName)
    {
        return $this->render('FrancoisBundle:Default:bye.html.twig',
            ["firstname" => $name, "lastname" => $lastName]
    );
    }
}



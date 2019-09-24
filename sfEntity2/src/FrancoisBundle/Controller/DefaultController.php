<?php

namespace FrancoisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}", name="home")
     */
    public function indexAction($name = "unknown")
    {
        return $this->render('FrancoisBundle:Default:index.html.twig',
        [
        "name" =>$name,
        ]
        );

    }


/**
     * @Route("/bye/{name}", name="byebye")
     */
    public function byeAction($name = "unknown")
    {
        return $this->render('FrancoisBundle:Default:bye.html.twig',
        [
        "name" =>$name,
        ]
        );

    }
}


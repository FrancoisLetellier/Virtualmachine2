<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdvertController extends Controller
{
    /**
     * @Route("/platform", name="platform" )
     */
    public function index()
    {
        return $this->render('OCPlatformBundle:Default:index.html.twig');
    }

    /**
     * @Route("/platform/advert/{id}", name="id" )
     */
    public function view()
    {
        return $this->render('OCPlatformBundle:Default:view.html.twig');
    }

    /**
     * @Route("/platform/add", name="id" )
     */
    public function add()
    {
        return $this->render('OCPlatformBundle:Default:add.html.twig');
    }
}

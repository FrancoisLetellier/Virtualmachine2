<?php

namespace Topi\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @return Response
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('@TopiPlatform/Front/index.html.twig');
    }
}

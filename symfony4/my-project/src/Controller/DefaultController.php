<?php
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Created by PhpStorm.
 * User: topikana
 * Date: 06/03/18
 * Time: 18:00
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="platform" )
     */
    public function index()
    {
        return $this->render('templates/base.html.twig');
    }


}
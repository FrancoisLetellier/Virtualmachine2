<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $headers = array('Accept' => 'application/json');
        $query = array('q' => 'Frank sinatra', 'type' => 'track');

        $response = Request->get('https://api.spotify.com/v1/search',$headers,$query);
// or use a plain text request
// $response = Unirest\Request::get('https://api.spotify.com/v1/search?q=Frank%20sinatra&type=track');

// Display the result
        dump($response->body);


//        // replace this example code with whatever you need
//        return $this->render('default/index.html.twig', [
//            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
//        ]);
    }
}

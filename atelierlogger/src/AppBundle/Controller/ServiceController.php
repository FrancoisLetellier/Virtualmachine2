<?php
/**
 * Created by PhpStorm.
 * User: topikana
 * Date: 08/06/17
 * Time: 17:27
 */

namespace AppBundle\Controller;


use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ServiceController
 * @package AppBundle\Controller
 * @Route("/service", name="home")
 */
class ServiceController extends Controller
{


    /**
     * @return Response
     * @Route("/", name="car_service)
     */
    public function serviceAction()
    {
        $service = $this->get('app.my_service');

        return new Response($service->justDoIt());
    }

    public function loggerAction(LoggerInterface $logger)
    {
        $logger->info('im just started');
    }
}
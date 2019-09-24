<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Town;
use AppBundle\Repository\TownRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Town controller.
 *
 * @Route("town")
 */
class TownController extends Controller
{
    /**
     * Lists all town entities.
     *
     * @Route("/", name="town_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $towns = $em->getRepository('AppBundle:Town')->findAll();

        return $this->render('town/index.html.twig', array(
            'towns' => $towns,
        ));
    }

    /**
     * Finds and displays a town entity.
     * @Route("/{id}", name="town_show")
     * @Method("GET")
     */
    public function showAction(Town $town)
    {

        return $this->render('town/show.html.twig', array(
            'town' => $town,
        ));
    }

    /**
     * @Route("/find/{town}", name="town_find")
     * @param Request $request
     * @param string $town
     * @return JsonResponse
     */
    public function autocompleteAction(Request $request, $town)
    {
        if ($request->isXmlHttpRequest()) {
            /**
             * @var $repository TownRepository
             */
            $repository = $this->getDoctrine()->getRepository('AppBundle:Town');
            $data = $repository->getTownLike('fr', $town);
            return new JsonResponse(array("data" => json_encode($data)));
        }else{
            throw new HttpException('500', 'invalid call');
        }
    }

}

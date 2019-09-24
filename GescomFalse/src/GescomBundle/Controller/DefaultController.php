<?php

namespace GescomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use GescomBundle\Entity\product;
use GescomBundle\Form\ProductForm;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        return $this->render('GescomBundle:Default:index.html.twig');
    }

    /**
     * @Route("/addProduct", name="add")
     */
    public function addProduct(Request $request)
    {
    $product = new Product();
    $form = $this->createForm(ProductForm::class, $product);

    $form->handleRequest($request);

    if($form->isSubmitted()&&$form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return $this->redirectToRoute("home");

    }
    return $this->render('GescomBundle:Default:add.html.twig', array(
       'form' => $form->createView(),
    ));

    }
}

<?php

//src/OC/platformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;


class AdvertController
{
    public function indexAction()
    {
        return new Response("Notre propre Hello world !");
    }
}

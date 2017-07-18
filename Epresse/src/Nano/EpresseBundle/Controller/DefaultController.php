<?php

namespace Nano\EpresseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EpresseBundle:Default:index.html.twig');
    }
}

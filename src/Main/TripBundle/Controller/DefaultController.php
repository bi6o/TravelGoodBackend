<?php

namespace Main\TripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MainTripBundle:Default:index.html.twig');
    }
}

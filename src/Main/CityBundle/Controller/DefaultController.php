<?php

namespace Main\CityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MainCityBundle:Default:index.html.twig');
    }
}

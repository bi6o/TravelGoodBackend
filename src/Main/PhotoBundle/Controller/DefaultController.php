<?php

namespace Main\PhotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MainPhotoBundle:Default:index.html.twig');
    }
}

<?php

namespace Main\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // $customer = new \Main\BackendBundle\Entity\Customer();
        // $customer->setUsername('Jalal');
        // $customer->setEmail('dummy@email.try');
        // $customer->setUsername('jkotrach');
        // $customer->setPassword('password');

        // $customerCity = new \Main\BackendBundle\Entity\CustomerCity();
        // $customerCity->setCityName('Berlin');
        // $customerCity->setLogitude('191.222');
        // $customerCity->setLatitude('191.222');
        // $customerCity->setCityBreif('Awesome city');
        // $customerCity->setLivedCity(true);
        // $customerCity->setCurrentCity(true);
        // $customerCity->setVisitedCity(false);

        // $dateArrived = new \DateTime('now');
        // $customerCity->setDateArrived($dateArrived);
        // $customerCity->setDateDeparted($dateArrived);

        // $customerCity->setCustomer($customer);
        // $em = $this->getDoctrine()->getManager();

        // $em->persist($customerCity);
        // $em->persist($customer);
        // $em->flush();

        // return new Response('Saved new customer city with id '.$customerCity->getId());

        return $this->render('MainBackendBundle:Default:index.html.twig');
    }
}

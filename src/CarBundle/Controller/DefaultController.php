<?php

namespace CarBundle\Controller;

//use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    public function indexAction()
    {
//        return $this->render('index.html.twig');
        return $this->render('CarBundle/index.html.twig');
//        return new Response("Displaying Cars Here :)");

    }
}

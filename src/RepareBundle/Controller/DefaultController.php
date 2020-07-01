<?php

namespace RepareBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
//        return $this->render('RepareBundle:Default:index.html.twig');
        return $this->render('RepareBundle/index.html.twig');

    }
}

<?php

namespace pman\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('pmanTestBundle:Default:index.html.twig', array('name' => $name));
    }
}

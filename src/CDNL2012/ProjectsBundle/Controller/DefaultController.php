<?php

namespace CDNL2012\ProjectsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('CDNL2012ProjectsBundle:Default:index.html.twig', array('name' => $name));
    }
}

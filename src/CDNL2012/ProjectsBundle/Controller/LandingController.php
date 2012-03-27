<?php

namespace CDNL2012\ProjectsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LandingController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('CDNL2012ProjectsBundle:Landing:index.html.twig');
    }
}

<?php

namespace MetaLeague\APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MetaLeagueAPIBundle:Default:index.html.twig', array('name' => $name));
    }
}

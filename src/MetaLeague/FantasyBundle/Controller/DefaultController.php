<?php

namespace MetaLeague\FantasyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MetaLeagueFantasyBundle:Default:index.html.twig', array('name' => $name));
    }
}

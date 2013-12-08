<?php

namespace MetaLeague\SiteBundle\Controller;

use Doctrine\ORM\EntityManager;
use MetaLeague\FantasyBundle\Entity\Game;
use MetaLeague\FantasyBundle\Entity\GameRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Template ()
     * @Route ("/")
     */
    public function indexAction()
    {
        /** @var $em EntityManager*/
        $em      = $this->get('doctrine.orm.entity_manager');
        $games   = $em->getRepository('MetaLeague\FantasyBundle\Entity\Game')
                       ->findAll();

        return array('games' => $games);
    }
}

<?php

namespace MetaLeague\SiteBundle\Controller;

use MetaLeague\FantasyBundle\Entity\Game;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Template ()
     */
    public function indexAction()
    {

        $lol = new Game();
        $lol->setName('League of Legends');
        $lol->setTeaserImage('img/games/lol-teaser.png');

        $cs = new Game();
        $cs->setName('Counter-Strike');
        $cs->setTeaserImage('img/games/cs-teaser.png');

        $dota = new Game();
        $dota->setName('Dota 2');
        $dota->setTeaserImage('img/games/dota-teaser.png');

        $games = array($lol, $cs, $dota, $lol);

        return array('games' => $games);
    }
}

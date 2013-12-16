<?php

namespace MetaLeague\FantasyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class ScoreboardController
 * @package MetaLeague\FantasyBundle\Controller
 * @Route ("/scoreboard")
 */
class ScoreboardController extends Controller
{
    /**
     * @Route("/all/{league}", name="_meta_fantasy_scoreboard")
     * @Template()
     */
    public function allAction($league)
    {
        return array('league' => $league);
    }

}

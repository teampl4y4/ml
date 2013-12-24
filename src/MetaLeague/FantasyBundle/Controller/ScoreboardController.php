<?php

namespace MetaLeague\FantasyBundle\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use MetaLeague\FantasyBundle\Entity\LeagueMatch;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use MetaLeague\FantasyBundle\Entity\League;

/**
 * Class ScoreboardController
 * @package MetaLeague\FantasyBundle\Controller
 * @Route ("/scoreboard")
 */
class ScoreboardController extends Controller
{
    /**
     * @Route("/all/{leagueId}", name="_meta_fantasy_scoreboard")
     * @Template()
     */
    public function allAction($leagueId)
    {
        /** @var EntityManager $em */
        $em         = $this->get('doctrine.orm.entity_manager');

        $league = $em->getRepository('MetaLeagueFantasyBundle:League')->findOneBy(array('id' => $leagueId));

        if(!$league instanceof League) {
            throw new NotFoundHttpException('League not found');
        }

        if (false === $this->get('security.context')->isGranted('VIEW', $league)) {
            throw new AccessDeniedException('Access Denied: User can not view league.');
        }

        $matches    = $em->getRepository('MetaLeagueFantasyBundle:LeagueMatch')->findBy(array('league' => $leagueId));
        return array('league' => $league, 'matches' => $matches);
    }

    /**
     * @param $matchId
     *
     * @Route("/match/{matchId}", name="_meta_fantasy_match_scoreboard")
     * @Template()
     */
    public function viewMatchAction($matchId)
    {
        /** @var EntityManager $em */
        $em         = $this->get('doctrine.orm.entity_manager');

        $match    = $em->getRepository('MetaLeagueFantasyBundle:LeagueMatch')->findOneBy(array('id' => $matchId));

        if(!$match instanceof LeagueMatch) {
            throw new NotFoundHttpException('League not found');
        }

        if (false === $this->get('security.context')->isGranted('VIEW', $match)) {
            throw new AccessDeniedException('Access Denied: User can not view match.');
        }

        return array('match' => $match);

    }

}

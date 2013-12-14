<?php
/**
 * @author Josh Team 'bizatch'
 */

namespace MetaLeague\FantasyBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\Doctrine;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MetaLeague\FantasyBundle\Entity\FantasyTeam;
use MetaLeague\FantasyBundle\Entity\Game;
use MetaLeague\FantasyBundle\Entity\GamePosition;
use MetaLeague\FantasyBundle\Entity\League;
use MetaLeague\FantasyBundle\Entity\LeagueRoster;
use MetaLeague\FantasyBundle\Entity\ProPlayer;
use MetaLeague\FantasyBundle\Entity\User;
use MetaLeague\FantasyBundle\Entity\LeagueMatch;

class LoadUserData implements FixtureInterface {

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $game           = $this->loadGames($manager);
        $league         = $this->loadLeagues($manager, $game);
        $user           = $this->loadUsers($manager, $league);
        $competitors    = $this->loadCompetitorsForUser($manager, $user, $league);
        $positions      = $this->loadGamePositions($manager, $game);
        $matches        = $this->loadLeagueMatches($manager, $user, $league, $competitors, $positions);
    }

    /**
     * @param ObjectManager $manager
     */
    private function loadUsers(ObjectManager $manager, League $league)
    {
        $user = new User();
        $user->setEmail('user@user.com');
        $user->setPlainPassword('user');
        $user->setEnabled(true);
        $user->addLeague($league);

        //make the user the commissioner of the league
        $league->setCommissioner($user);

        $manager->persist($user);
        $manager->persist($league);

        $manager->flush();

        return $user;
    }

    private function loadLeagueMatches(ObjectManager $manager, User $user, League $league, array $competitors, array $positions)
    {

        //create 1 pro player per position
        $pros = array();
        foreach($positions as $position)
        {
            /** @var GamePosition $position */
            $proPlayer = new ProPlayer();
            $proPlayer->setFirstName('Josh ' . $position->getDescription());
            $proPlayer->setLastName('Team ' . $position->getDescription());
            $proPlayer->setGamePosition($position);
            $pros[] = $proPlayer;

            $manager->persist($proPlayer);
        }

        /** @var @var User $competitor */
        $competitor = array_pop($competitors);

        $homeTeam = new FantasyTeam();
        $homeTeam->setName('Main FT');
        $homeTeam->setUser($user);
        $homeTeam->setLogo('n/a');
        $homeTeam->addPlayer($proPlayer);

        $manager->persist($homeTeam);

        $awayTeam = new FantasyTeam();
        $awayTeam->setName('Main FT Opponent');
        $awayTeam->setUser($competitor);
        $awayTeam->setLogo('n/a');
        $awayTeam->addPlayer($proPlayer);

        $manager->persist($awayTeam);

        $leagueMatch = new LeagueMatch();
        $leagueMatch->setStartsOn(new \DateTime('1 day ago'));
        $leagueMatch->setHomeTeam($homeTeam);
        $leagueMatch->setHomeTeamScore(rand(0,100));
        $leagueMatch->setAwayTeam($awayTeam);
        $leagueMatch->setAwayTeamScore(rand(0,100));

        $manager->persist($leagueMatch);

        //TODO make random matches between the competitors/users left in $competitors array

        $manager->flush();

    }

    /**
     * Loads some competitors into the same league as the user
     *
     * @param ObjectManager $manager
     * @param User $user
     * @param League $league
     * @param int $num
     * @return array of competitors made
     */
    private function loadCompetitorsForUser(ObjectManager $manager, User $user, League $league, $num = 11)
    {
        $users = array();
        for($i=0; $i<$num; $i++) {
            $username = 'user' . ($i + 1) . '@user.com';
            $u = new User();
            $u->setEmail($username);
            $u->setPlainPassword('user');
            $u->setEnabled(true);
            $u->addLeague($league);

            $users[] = $u;
            $manager->persist($u);
        }

        $manager->flush();
        return $users;
    }

    /**
     * @param ObjectManager $manager
     * @param Game $game
     * @return League
     */
    private function loadLeagues(ObjectManager $manager, Game $game)
    {
        $league = new League();
        $league->setGame($game);
        $league->setDescription('Default league of legends league in fixtures');
        $league->setName('Default LOL League');

        $manager->persist($league);
        $manager->flush();

        return $league;
    }

    /**
     * @param ObjectManager $manager
     * @return Game
     */
    private function loadGames(ObjectManager $manager)
    {
        //Games
        $gameLol = new Game();
        $gameLol->setName('League of Legends');
        $gameLol->setTeaserImage('img/games/lol-teaser.png');
        $manager->persist($gameLol);

        $gameCs = new Game();
        $gameCs->setName('Counter-Strike');
        $gameCs->setTeaserImage('img/games/cs-teaser.png');
        $manager->persist($gameCs);

        $dota = new Game();
        $dota->setName('Dota');
        $dota->setTeaserImage('img/games/dota-teaser.png');
        $manager->persist($dota);

        $gameLol2 = new Game();
        $gameLol2->setName('League of Legends 2');
        $gameLol2->setTeaserImage('img/games/lol-teaser.png');
        $manager->persist($gameLol2);

        $manager->flush();

        return $gameLol;
    }
    
    /**
     * @param ObjectManager $manager
     * @param Game $game
     * @return array of positions made
     */
    private function loadGamePositions(ObjectManager $manager, Game $game)
    {
        $positions = array(
            'SoloLaner',
            'Jungler',
            'Support',
            'ADC'
        );

        $p = array();
        forEach($positions as $id => $description) {
            $position = new GamePosition();
            $position->setGame($game);
            $position->setListingPriority($id);
            $position->setDescription($description);

            $manager->persist($position);
            $p[] = $position;
        }

        $manager->flush();
        return $p;
    }

} 
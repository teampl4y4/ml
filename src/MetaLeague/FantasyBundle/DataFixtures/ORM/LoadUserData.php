<?php
/**
 * @author Josh Team 'bizatch'
 */

namespace MetaLeague\FantasyBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\Doctrine;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MetaLeague\FantasyBundle\Entity\FantasyTeam;
use MetaLeague\FantasyBundle\Entity\FantasyTeamRosterSpot;
use MetaLeague\FantasyBundle\Entity\Game;
use MetaLeague\FantasyBundle\Entity\GamePosition;
use MetaLeague\FantasyBundle\Entity\League;
use MetaLeague\FantasyBundle\Entity\LeagueInvite;
use MetaLeague\FantasyBundle\Entity\LeagueRoster;
use MetaLeague\FantasyBundle\Entity\ProPlayer;
use MetaLeague\FantasyBundle\Entity\User;
use MetaLeague\FantasyBundle\Entity\ProMatch;
use MetaLeague\FantasyBundle\Entity\ProMatchAction;
use MetaLeague\FantasyBundle\Entity\LeagueMatch;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\Security\Acl\Permission\MaskBuilder;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

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
        $invite         = $this->loadLeagueInvite($manager, $league, $user);
        $competitors    = $this->loadCompetitorsForUser($manager, $league);
        $positions      = $this->loadGamePositions($manager, $game);
        $matches        = $this->loadLeagueMatches($manager, $user, $league, $competitors, $positions);
        $pro_match    = $this->loadProMatches($manager,$game);
        $pro_match_action    = $this->loadProMatchAction($manager, $game, $pro_match);
        //$interactions   = $this->loadInteractions($manager);
        //$matchInteractions = $this->loadMatchInteractions($manager,$league,$game,$matches);
    }

    /**
     * @param ObjectManager $manager
     */
    private function loadProMatchAction(ObjectManager $manager,$game,$proMatch)
    {
        $gameData = array("50277769"=>'{
         "gameType": "MATCHED_GAME",
         "fellowPlayers": [
            {
               "championId": 11,
               "teamId": 100,
               "summonerId": 49499148
            },
            {
               "championId": 41,
               "teamId": 100,
               "summonerId": 37983603
            },
            {
               "championId": 236,
               "teamId": 100,
               "summonerId": 49172806
            },
            {
               "championId": 75,
               "teamId": 100,
               "summonerId": 49973296
            }
         ],
         "gameId": 1215053909,
         "spell1": 12,
         "teamId": 100,
         "statistics": [
            {
               "id": 1,
               "name": "LEVEL",
               "value": 14
            },
            {
               "id": 2,
               "name": "GOLD_EARNED",
               "value": 10032
            },
            {
               "id": 4,
               "name": "NUM_DEATHS",
               "value": 13
            },
            {
               "id": 7,
               "name": "MINIONS_KILLED",
               "value": 85
            },
            {
               "id": 8,
               "name": "CHAMPIONS_KILLED",
               "value": 2
            },
            {
               "id": 9,
               "name": "GOLD_SPENT",
               "value": 5810
            },
            {
               "id": 10,
               "name": "TOTAL_DAMAGE_DEALT",
               "value": 67135
            },
            {
               "id": 11,
               "name": "TOTAL_DAMAGE_TAKEN",
               "value": 29709
            },
            {
               "id": 23,
               "name": "WIN",
               "value": 1
            },
            {
               "id": 93,
               "name": "ITEM5",
               "value": 3082
            },
            {
               "id": 24,
               "name": "TEAM",
               "value": 100
            },
            {
               "id": 92,
               "name": "ITEM4",
               "value": 3065
            },
            {
               "id": 89,
               "name": "ITEM1",
               "value": 3028
            },
            {
               "id": 88,
               "name": "ITEM0",
               "value": 3096
            },
            {
               "id": 31,
               "name": "PHYSICAL_DAMAGE_DEALT_PLAYER",
               "value": 17255
            },
            {
               "id": 91,
               "name": "ITEM3",
               "value": 3151
            },
            {
               "id": 30,
               "name": "LARGEST_MULTI_KILL",
               "value": 1
            },
            {
               "id": 90,
               "name": "ITEM2",
               "value": 3111
            },
            {
               "id": 34,
               "name": "MAGIC_DAMAGE_TAKEN",
               "value": 18721
            },
            {
               "id": 100,
               "name": "PHYSICAL_DAMAGE_DEALT_TO_CHAMPIONS",
               "value": 2319
            },
            {
               "id": 32,
               "name": "MAGIC_DAMAGE_DEALT_PLAYER",
               "value": 49879
            },
            {
               "id": 33,
               "name": "PHYSICAL_DAMAGE_TAKEN",
               "value": 10876
            },
            {
               "id": 101,
               "name": "TOTAL_DAMAGE_DEALT_TO_CHAMPIONS",
               "value": 7276
            },
            {
               "id": 99,
               "name": "MAGIC_DAMAGE_DEALT_TO_CHAMPIONS",
               "value": 4957
            },
            {
               "id": 43,
               "name": "TOTAL_HEAL",
               "value": 9169
            },
            {
               "id": 40,
               "name": "TIME_PLAYED",
               "value": 2403
            },
            {
               "id": 109,
               "name": "TOTAL_TIME_CROWD_CONTROL_DEALT",
               "value": 38
            },
            {
               "id": 104,
               "name": "TRUE_DAMAGE_TAKEN",
               "value": 112
            },
            {
               "id": 44,
               "name": "TOTAL_UNITS_HEALED",
               "value": 5
            }
         ],
         "spell2": 7,
         "gameMode": "CLASSIC",
         "mapId": 1,
         "level": 5,
         "invalid": false,
         "subType": "BOT",
         "championId": 16,
         "createDate": 1388212670157
      }',
            "49499148"=>'{"gameType": "MATCHED_GAME",
         "fellowPlayers": [
            {
               "championId": 16,
               "teamId": 100,
               "summonerId":50277769
	    },
            {
               "championId": 41,
               "teamId": 100,
               "summonerId": 37983603
            },
            {
               "championId": 236,
               "teamId": 100,
               "summonerId": 49172806
            },
            {
               "championId": 75,
               "teamId": 100,
               "summonerId": 49973296
            }
         ],
         "gameId": 1215053909,
         "spell1": 6,
         "teamId": 100,
         "statistics": [
            {
               "id": 1,
               "name": "LEVEL",
               "value": 18
            },
            {
               "id": 2,
               "name": "GOLD_EARNED",
               "value": 24357
            },
            {
               "id": 4,
               "name": "NUM_DEATHS",
               "value": 10
            },
            {
               "id": 5,
               "name": "BARRACKS_KILLED",
               "value": 1
            },
            {
               "id": 6,
               "name": "TURRETS_KILLED",
               "value": 4
            },
            {
               "id": 7,
               "name": "MINIONS_KILLED",
               "value": 346
            },
            {
               "id": 8,
               "name": "CHAMPIONS_KILLED",
               "value": 24
            },
            {
               "id": 9,
               "name": "GOLD_SPENT",
               "value": 13190
            },
            {
               "id": 10,
               "name": "TOTAL_DAMAGE_DEALT",
               "value": 352376
            },
            {
               "id": 11,
               "name": "TOTAL_DAMAGE_TAKEN",
               "value": 53301
            },
            {
               "id": 16,
               "name": "DOUBLE_KILLS",
               "value": 6
            },
            {
               "id": 20,
               "name": "KILLING_SPREES",
               "value": 6
            },
            {
               "id": 23,
               "name": "WIN",
               "value": 1
            },
            {
               "id": 22,
               "name": "LARGEST_KILLING_SPREE",
               "value": 7
            },
            {
               "id": 93,
               "name": "ITEM5",
               "value": 3035
            },
            {
               "id": 92,
               "name": "ITEM4",
               "value": 3172
            },
            {
               "id": 24,
               "name": "TEAM",
               "value": 100
            },
            {
               "id": 89,
               "name": "ITEM1",
               "value": 3031
            },
            {
               "id": 28,
               "name": "NEUTRAL_MINIONS_KILLED",
               "value": 40
            },
            {
               "id": 88,
               "name": "ITEM0",
               "value": 3046
            },
            {
               "id": 31,
               "name": "PHYSICAL_DAMAGE_DEALT_PLAYER",
               "value": 308113
            },
            {
               "id": 91,
               "name": "ITEM3",
               "value": 3087
            },
            {
               "id": 90,
               "name": "ITEM2",
               "value": 3153
            },
            {
               "id": 30,
               "name": "LARGEST_MULTI_KILL",
               "value": 2
            },
            {
               "id": 102,
               "name": "TRUE_DAMAGE_DEALT_PLAYER",
               "value": 10261
            },
            {
               "id": 34,
               "name": "MAGIC_DAMAGE_TAKEN",
               "value": 26079
            },
            {
               "id": 103,
               "name": "TRUE_DAMAGE_DEALT_TO_CHAMPIONS",
               "value": 7653
            },
            {
               "id": 100,
               "name": "PHYSICAL_DAMAGE_DEALT_TO_CHAMPIONS",
               "value": 38836
            },
            {
               "id": 32,
               "name": "MAGIC_DAMAGE_DEALT_PLAYER",
               "value": 34001
            },
            {
               "id": 101,
               "name": "TOTAL_DAMAGE_DEALT_TO_CHAMPIONS",
               "value": 50319
            },
            {
               "id": 33,
               "name": "PHYSICAL_DAMAGE_TAKEN",
               "value": 25998
            },
            {
               "id": 39,
               "name": "LARGEST_CRITICAL_STRIKE",
               "value": 912
            },
            {
               "id": 99,
               "name": "MAGIC_DAMAGE_DEALT_TO_CHAMPIONS",
               "value": 3829
            },
            {
               "id": 110,
               "name": "ITEM6",
               "value": 3361
            },
            {
               "id": 43,
               "name": "TOTAL_HEAL",
               "value": 7269
            },
            {
               "id": 40,
               "name": "TIME_PLAYED",
               "value": 2403
            },
            {
               "id": 108,
               "name": "NEUTRAL_MINIONS_KILLED_YOUR_JUNGLE",
               "value": 37
            },
            {
               "id": 109,
               "name": "TOTAL_TIME_CROWD_CONTROL_DEALT",
               "value": 249
            },
            {
               "id": 106,
               "name": "WARD_PLACED",
               "value": 7
            },
            {
               "id": 107,
               "name": "NEUTRAL_MINIONS_KILLED_ENEMY_JUNGLE",
               "value": 3
            },
            {
               "id": 104,
               "name": "TRUE_DAMAGE_TAKEN",
               "value": 1223
            },
            {
               "id": 44,
               "name": "TOTAL_UNITS_HEALED",
               "value": 1
            },
            {
               "id": 105,
               "name": "WARD_KILLED",
               "value": 1
            },
            {
               "id": 48,
               "name": "ASSISTS",
               "value": 4
            }
         ],
         "spell2": 12,
         "gameMode": "CLASSIC",
         "mapId": 1,
         "level": 11,
         "invalid": false,
         "subType": "BOT",
         "championId": 11,
         "createDate": 1388212670156
      }',
            "37983603"=>'{
         "gameType": "MATCHED_GAME",
         "fellowPlayers": [
            {
               "championId": 11,
               "teamId": 100,
               "summonerId": 49499148
            },
            {
               "championId": 16,
               "teamId": 100,
               "summonerId": 50277769
            },
            {
               "championId": 236,
               "teamId": 100,
               "summonerId": 49172806
            },
            {
               "championId": 75,
               "teamId": 100,
               "summonerId": 49973296
            }
         ],
         "gameId": 1215053909,
         "spell1": 12,
         "teamId": 100,
         "statistics": [
            {
               "id": 1,
               "name": "LEVEL",
               "value": 18
            },
            {
               "id": 2,
               "name": "GOLD_EARNED",
               "value": 14508
            },
            {
               "id": 4,
               "name": "NUM_DEATHS",
               "value": 5
            },
            {
               "id": 6,
               "name": "TURRETS_KILLED",
               "value": 2
            },
            {
               "id": 7,
               "name": "MINIONS_KILLED",
               "value": 179
            },
            {
               "id": 8,
               "name": "CHAMPIONS_KILLED",
               "value": 7
            },
            {
               "id": 9,
               "name": "GOLD_SPENT",
               "value": 9655
            },
            {
               "id": 10,
               "name": "TOTAL_DAMAGE_DEALT",
               "value": 182411
            },
            {
               "id": 11,
               "name": "TOTAL_DAMAGE_TAKEN",
               "value": 33447
            },
            {
               "id": 16,
               "name": "DOUBLE_KILLS",
               "value": 1
            },
            {
               "id": 20,
               "name": "KILLING_SPREES",
               "value": 1
            },
            {
               "id": 23,
               "name": "WIN",
               "value": 1
            },
            {
               "id": 22,
               "name": "LARGEST_KILLING_SPREE",
               "value": 6
            },
            {
               "id": 24,
               "name": "TEAM",
               "value": 100
            },
            {
               "id": 92,
               "name": "ITEM4",
               "value": 3083
            },
            {
               "id": 89,
               "name": "ITEM1",
               "value": 3074
            },
            {
               "id": 88,
               "name": "ITEM0",
               "value": 3047
            },
            {
               "id": 28,
               "name": "NEUTRAL_MINIONS_KILLED",
               "value": 29
            },
            {
               "id": 31,
               "name": "PHYSICAL_DAMAGE_DEALT_PLAYER",
               "value": 142745
            },
            {
               "id": 91,
               "name": "ITEM3",
               "value": 3031
            },
            {
               "id": 30,
               "name": "LARGEST_MULTI_KILL",
               "value": 2
            },
            {
               "id": 90,
               "name": "ITEM2",
               "value": 3087
            },
            {
               "id": 34,
               "name": "MAGIC_DAMAGE_TAKEN",
               "value": 20083
            },
            {
               "id": 102,
               "name": "TRUE_DAMAGE_DEALT_PLAYER",
               "value": 888
            },
            {
               "id": 103,
               "name": "TRUE_DAMAGE_DEALT_TO_CHAMPIONS",
               "value": 348
            },
            {
               "id": 100,
               "name": "PHYSICAL_DAMAGE_DEALT_TO_CHAMPIONS",
               "value": 10334
            },
            {
               "id": 32,
               "name": "MAGIC_DAMAGE_DEALT_PLAYER",
               "value": 38778
            },
            {
               "id": 101,
               "name": "TOTAL_DAMAGE_DEALT_TO_CHAMPIONS",
               "value": 18138
            },
            {
               "id": 33,
               "name": "PHYSICAL_DAMAGE_TAKEN",
               "value": 13026
            },
            {
               "id": 39,
               "name": "LARGEST_CRITICAL_STRIKE",
               "value": 844
            },
            {
               "id": 99,
               "name": "MAGIC_DAMAGE_DEALT_TO_CHAMPIONS",
               "value": 7456
            },
            {
               "id": 110,
               "name": "ITEM6",
               "value": 3350
            },
            {
               "id": 43,
               "name": "TOTAL_HEAL",
               "value": 6803
            },
            {
               "id": 40,
               "name": "TIME_PLAYED",
               "value": 2403
            },
            {
               "id": 108,
               "name": "NEUTRAL_MINIONS_KILLED_YOUR_JUNGLE",
               "value": 15
            },
            {
               "id": 109,
               "name": "TOTAL_TIME_CROWD_CONTROL_DEALT",
               "value": 1433
            },
            {
               "id": 106,
               "name": "WARD_PLACED",
               "value": 6
            },
            {
               "id": 107,
               "name": "NEUTRAL_MINIONS_KILLED_ENEMY_JUNGLE",
               "value": 14
            },
            {
               "id": 104,
               "name": "TRUE_DAMAGE_TAKEN",
               "value": 337
            },
            {
               "id": 44,
               "name": "TOTAL_UNITS_HEALED",
               "value": 1
            },
            {
               "id": 48,
               "name": "ASSISTS",
               "value": 2
            }
         ],
         "spell2": 14,
         "gameMode": "CLASSIC",
         "mapId": 1,
         "level": 11,
         "invalid": false,
         "subType": "BOT",
         "championId": 41,
         "createDate": 1388212670156
      }',
            "49172806"=>'{
         "gameType": "MATCHED_GAME",
         "fellowPlayers": [
            {
               "championId": 11,
               "teamId": 100,
               "summonerId": 49499148
            },
            {
               "championId": 16,
               "teamId": 100,
               "summonerId": 50277769
            },
            {
               "championId": 41,
               "teamId": 100,
               "summonerId": 37983603
            },
            {
               "championId": 75,
               "teamId": 100,
               "summonerId": 49973296
            }
         ],
         "gameId": 1215053909,
         "spell1": 6,
         "teamId": 100,
         "statistics": [
            {
               "id": 1,
               "name": "LEVEL",
               "value": 15
            },
            {
               "id": 2,
               "name": "GOLD_EARNED",
               "value": 11437
            },
            {
               "id": 4,
               "name": "NUM_DEATHS",
               "value": 3
            },
            {
               "id": 5,
               "name": "BARRACKS_KILLED",
               "value": 1
            },
            {
               "id": 6,
               "name": "TURRETS_KILLED",
               "value": 1
            },
            {
               "id": 7,
               "name": "MINIONS_KILLED",
               "value": 125
            },
            {
               "id": 8,
               "name": "CHAMPIONS_KILLED",
               "value": 2
            },
            {
               "id": 9,
               "name": "GOLD_SPENT",
               "value": 5588
            },
            {
               "id": 10,
               "name": "TOTAL_DAMAGE_DEALT",
               "value": 107005
            },
            {
               "id": 11,
               "name": "TOTAL_DAMAGE_TAKEN",
               "value": 16644
            },
            {
               "id": 20,
               "name": "KILLING_SPREES",
               "value": 1
            },
            {
               "id": 23,
               "name": "WIN",
               "value": 1
            },
            {
               "id": 22,
               "name": "LARGEST_KILLING_SPREE",
               "value": 2
            },
            {
               "id": 93,
               "name": "ITEM5",
               "value": 1038
            },
            {
               "id": 24,
               "name": "TEAM",
               "value": 100
            },
            {
               "id": 92,
               "name": "ITEM4",
               "value": 1053
            },
            {
               "id": 89,
               "name": "ITEM1",
               "value": 3078
            },
            {
               "id": 88,
               "name": "ITEM0",
               "value": 1055
            },
            {
               "id": 28,
               "name": "NEUTRAL_MINIONS_KILLED",
               "value": 3
            },
            {
               "id": 91,
               "name": "ITEM3",
               "value": 3102
            },
            {
               "id": 31,
               "name": "PHYSICAL_DAMAGE_DEALT_PLAYER",
               "value": 81440
            },
            {
               "id": 30,
               "name": "LARGEST_MULTI_KILL",
               "value": 1
            },
            {
               "id": 90,
               "name": "ITEM2",
               "value": 3006
            },
            {
               "id": 34,
               "name": "MAGIC_DAMAGE_TAKEN",
               "value": 9010
            },
            {
               "id": 100,
               "name": "PHYSICAL_DAMAGE_DEALT_TO_CHAMPIONS",
               "value": 9205
            },
            {
               "id": 32,
               "name": "MAGIC_DAMAGE_DEALT_PLAYER",
               "value": 25564
            },
            {
               "id": 33,
               "name": "PHYSICAL_DAMAGE_TAKEN",
               "value": 7497
            },
            {
               "id": 101,
               "name": "TOTAL_DAMAGE_DEALT_TO_CHAMPIONS",
               "value": 12155
            },
            {
               "id": 39,
               "name": "LARGEST_CRITICAL_STRIKE",
               "value": 450
            },
            {
               "id": 99,
               "name": "MAGIC_DAMAGE_DEALT_TO_CHAMPIONS",
               "value": 2950
            },
            {
               "id": 110,
               "name": "ITEM6",
               "value": 3350
            },
            {
               "id": 43,
               "name": "TOTAL_HEAL",
               "value": 2321
            },
            {
               "id": 40,
               "name": "TIME_PLAYED",
               "value": 2403
            },
            {
               "id": 108,
               "name": "NEUTRAL_MINIONS_KILLED_YOUR_JUNGLE",
               "value": 2
            },
            {
               "id": 106,
               "name": "WARD_PLACED",
               "value": 2
            },
            {
               "id": 107,
               "name": "NEUTRAL_MINIONS_KILLED_ENEMY_JUNGLE",
               "value": 1
            },
            {
               "id": 44,
               "name": "TOTAL_UNITS_HEALED",
               "value": 6
            },
            {
               "id": 104,
               "name": "TRUE_DAMAGE_TAKEN",
               "value": 136
            },
            {
               "id": 48,
               "name": "ASSISTS",
               "value": 7
            }
         ],
         "spell2": 7,
         "gameMode": "CLASSIC",
         "mapId": 1,
         "level": 11,
         "invalid": false,
         "subType": "BOT",
         "championId": 236,
         "createDate": 1388212670161
      }',
            "49973296"=>'{
         "gameType": "MATCHED_GAME",
         "fellowPlayers": [
            {
               "championId": 11,
               "teamId": 100,
               "summonerId": 49499148
            },
            {
               "championId": 16,
               "teamId": 100,
               "summonerId": 50277769
            },
            {
               "championId": 41,
               "teamId": 100,
               "summonerId": 37983603
            },
            {
               "championId": 236,
               "teamId": 100,
               "summonerId": 49172806
            }
         ],
         "gameId": 1215053909,
         "spell1": 14,
         "teamId": 100,
         "statistics": [
            {
               "id": 1,
               "name": "LEVEL",
               "value": 12
            },
            {
               "id": 2,
               "name": "GOLD_EARNED",
               "value": 8986
            },
            {
               "id": 4,
               "name": "NUM_DEATHS",
               "value": 16
            },
            {
               "id": 5,
               "name": "BARRACKS_KILLED",
               "value": 1
            },
            {
               "id": 6,
               "name": "TURRETS_KILLED",
               "value": 1
            },
            {
               "id": 7,
               "name": "MINIONS_KILLED",
               "value": 74
            },
            {
               "id": 9,
               "name": "GOLD_SPENT",
               "value": 7438
            },
            {
               "id": 10,
               "name": "TOTAL_DAMAGE_DEALT",
               "value": 60804
            },
            {
               "id": 11,
               "name": "TOTAL_DAMAGE_TAKEN",
               "value": 45197
            },
            {
               "id": 23,
               "name": "WIN",
               "value": 1
            },
            {
               "id": 24,
               "name": "TEAM",
               "value": 100
            },
            {
               "id": 92,
               "name": "ITEM4",
               "value": 1036
            },
            {
               "id": 89,
               "name": "ITEM1",
               "value": 3143
            },
            {
               "id": 28,
               "name": "NEUTRAL_MINIONS_KILLED",
               "value": 4
            },
            {
               "id": 88,
               "name": "ITEM0",
               "value": 1054
            },
            {
               "id": 31,
               "name": "PHYSICAL_DAMAGE_DEALT_PLAYER",
               "value": 45590
            },
            {
               "id": 91,
               "name": "ITEM3",
               "value": 3009
            },
            {
               "id": 90,
               "name": "ITEM2",
               "value": 3078
            },
            {
               "id": 34,
               "name": "MAGIC_DAMAGE_TAKEN",
               "value": 26792
            },
            {
               "id": 102,
               "name": "TRUE_DAMAGE_DEALT_PLAYER",
               "value": 1480
            },
            {
               "id": 103,
               "name": "TRUE_DAMAGE_DEALT_TO_CHAMPIONS",
               "value": 1480
            },
            {
               "id": 32,
               "name": "MAGIC_DAMAGE_DEALT_PLAYER",
               "value": 13734
            },
            {
               "id": 100,
               "name": "PHYSICAL_DAMAGE_DEALT_TO_CHAMPIONS",
               "value": 6963
            },
            {
               "id": 33,
               "name": "PHYSICAL_DAMAGE_TAKEN",
               "value": 18010
            },
            {
               "id": 101,
               "name": "TOTAL_DAMAGE_DEALT_TO_CHAMPIONS",
               "value": 11410
            },
            {
               "id": 99,
               "name": "MAGIC_DAMAGE_DEALT_TO_CHAMPIONS",
               "value": 2967
            },
            {
               "id": 39,
               "name": "LARGEST_CRITICAL_STRIKE",
               "value": 581
            },
            {
               "id": 110,
               "name": "ITEM6",
               "value": 3350
            },
            {
               "id": 108,
               "name": "NEUTRAL_MINIONS_KILLED_YOUR_JUNGLE",
               "value": 3
            },
            {
               "id": 40,
               "name": "TIME_PLAYED",
               "value": 2403
            },
            {
               "id": 109,
               "name": "TOTAL_TIME_CROWD_CONTROL_DEALT",
               "value": 635
            },
            {
               "id": 106,
               "name": "WARD_PLACED",
               "value": 5
            },
            {
               "id": 107,
               "name": "NEUTRAL_MINIONS_KILLED_ENEMY_JUNGLE",
               "value": 1
            },
            {
               "id": 104,
               "name": "TRUE_DAMAGE_TAKEN",
               "value": 394
            },
            {
               "id": 48,
               "name": "ASSISTS",
               "value": 2
            }
         ],
         "spell2": 4,
         "gameMode": "CLASSIC",
         "mapId": 1,
         "level": 13,
         "invalid": false,
         "subType": "BOT",
         "championId": 75,
         "createDate": 1388212670158
      }');
        $actions = array();
        foreach($gameData as $pro=>$playerData){
            $proMatchAction = new ProMatchAction();
            $proMatchAction->setGame($game);
            $proMatchAction->setProMatch($proMatch);
            $proMatchAction->setProPlayer($this->pros[$pro]);
            $proMatchAction->setGameStats(json_decode($playerData));

            $manager->persist($proMatchAction);

            $manager->flush();
        }
        return $proMatchAction;
    }

    /**
     * @param ObjectManager $manager
     */
    private function loadProMatches(ObjectManager $manager,$game)
    {
        $proMatch = new ProMatch();
        $endTime = 1388212670156/1000;
        $timePlayed = 2403;
        $startTime = $endTime - $timePlayed;
        $start = new \DateTime();
        $start->setTimestamp($startTime);
        $end = new \DateTime();
        $end->setTimestamp($endTime);
        $proMatch->setStartTime($start);
        $proMatch->setEndTime($end);
        $proMatch->setGame($game);
        
        $gameData = new \stdClass();
        $gameData->gameMode = "CLASSIC";
        $gameData->mapId = 1;
        $gameData->gameType = "MATCHED_GAME";
        $gameData->subType = "BOT";
        $proMatch->setGameData($gameData);

        $manager->persist($proMatch);

        $manager->flush();

        return $proMatch;
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

        $aclManager = $this->container->get('problematic.acl_manager');
        $aclManager->setObjectPermission($league, MaskBuilder::MASK_OPERATOR, $user);

        $manager->flush();

        return $user;
    }

    private function loadLeagueMatches(ObjectManager $manager, User $user, League $league, array $competitors, array $positions)
    {
        $aclManager = $this->container->get('problematic.acl_manager');

        //create 1 pro player per position
        $pros = array();
        //real ids
        $lol_ids = array(50277769,49499148,37983603,49172806,49973296);
        foreach($positions as $position)
        {
            /** @var GamePosition $position */
            $proPlayer = new ProPlayer();
            $proPlayer->setFirstName('Dummy');
            $proPlayer->setLastName($position->getDescription());
            $proPlayer->setGamePosition($position);
            $proPlayer->setGame($league->getGame());
            $proPlayer->setAlias(array_pop($lol_ids));
            $proPlayer->setDateOfBirth(new \DateTime(rand(16,26) . ' years ago'));
            $pros[$proPlayer->getAlias()] = $proPlayer;

            $manager->persist($proPlayer);
        }
        $this->pros = $pros;
        /** @var @var User $competitor */
        $competitor = array_pop($competitors);

        $homeTeam = new FantasyTeam();
        $homeTeam->setName('Main FT');
        $homeTeam->setUser($user);
        $homeTeam->setLogo('n/a');

        //add player to the roster
        $rosterSpot1 = new FantasyTeamRosterSpot();
        $rosterSpot1->setFantasyTeam($homeTeam);
        $rosterSpot1->setProPlayer($proPlayer);
        $rosterSpot1->setIsStarter(true);

        $manager->persist($rosterSpot1);
        $manager->persist($homeTeam);
        $manager->flush();

        $aclManager->setObjectPermission($homeTeam, MaskBuilder::MASK_OPERATOR, $user);
        $aclManager->setObjectPermission($rosterSpot1, MaskBuilder::MASK_OPERATOR, $user);

        $awayTeam = new FantasyTeam();
        $awayTeam->setName('Main FT Opponent');
        $awayTeam->setUser($competitor);
        $awayTeam->setLogo('n/a');

        //add player to the roster
        $rosterSpot2 = new FantasyTeamRosterSpot();
        $rosterSpot2->setFantasyTeam($awayTeam);
        $rosterSpot2->setProPlayer($proPlayer);
        $rosterSpot2->setIsStarter(false);

        $manager->persist($rosterSpot2);
        $manager->persist($awayTeam);
        $manager->flush();

        $aclManager->setObjectPermission($awayTeam, MaskBuilder::MASK_OPERATOR, $competitor);
        $aclManager->setObjectPermission($rosterSpot2, MaskBuilder::MASK_OPERATOR, $competitor);
        $aclManager->setObjectPermission($awayTeam, MaskBuilder::MASK_OPERATOR, $league->getCommissioner());
        $aclManager->setObjectPermission($rosterSpot2, MaskBuilder::MASK_OPERATOR, $league->getCommissioner());

        $matches = array();

        $leagueMatch = new LeagueMatch();
        $leagueMatch->setStartsOn(new \DateTime('1 day ago'));
        $leagueMatch->setHomeTeam($homeTeam);
        $leagueMatch->setHomeTeamScore(rand(0,100));
        $leagueMatch->setAwayTeam($awayTeam);
        $leagueMatch->setAwayTeamScore(rand(0,100));
        $leagueMatch->setLeague($league);
        $matches[] = $leagueMatch;

        $manager->persist($leagueMatch);
        $manager->flush();

        $aclManager->setObjectPermission($leagueMatch, MaskBuilder::MASK_OPERATOR, $league->getCommissioner());

        //create some other matches in the league
        $itts = floor(count($competitors) / 2);
        for($i=1;$i<=$itts;$i++) {
            $homeTeam = new FantasyTeam();
            $homeTeam->setUser(array_pop($competitors));
            $homeTeam->setName('Fixture hTeam ' . $i);
            $homeTeam->setLogo('n/a');
            $manager->persist($homeTeam);

            $awayTeam = new FantasyTeam();
            $awayTeam->setUser(array_pop($competitors));
            $awayTeam->setName('Fixture aTeam ' . $i);
            $awayTeam->setLogo('n/a');
            $manager->persist($awayTeam);

            $match = new LeagueMatch();
            $match->setHomeTeam($homeTeam);
            $match->setAwayTeam($awayTeam);
            $match->setHomeTeamScore(rand(0,100));
            $match->setAwayTeamScore(rand(0,100));
            $match->setStartsOn(new \DateTime('-1 day'));
            $match->setLeague($league);
            $manager->persist($match);

            $manager->flush();

            $aclManager->setObjectPermission($homeTeam, MaskBuilder::MASK_OPERATOR, $homeTeam->getUser());
            $aclManager->setObjectPermission($awayTeam, MaskBuilder::MASK_OPERATOR, $awayTeam->getUser());
            $aclManager->setObjectPermission($match, MaskBuilder::MASK_OPERATOR, $league->getCommissioner());

            $matches[] = $match;
        }

        $manager->flush();
        return $matches;
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
    private function loadCompetitorsForUser(ObjectManager $manager, League $league, $num = 11)
    {
        $aclManager = $this->container->get('problematic.acl_manager');

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
            $manager->flush();

            $aclManager->setObjectPermission($league, MaskBuilder::MASK_VIEW, $u);
        }

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
        $league->setIsPrivate(true);

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
            'ADC',
            'Tank'
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

    /**
     * @param ObjectManager $manager
     * @param League $game
     * @param User $user
     * @return LeagueInvite
     */
    private function loadLeagueInvite($manager, $league, $user)
    {
        $invite = new LeagueInvite();
        $invite->setCreatedBy($user);
        $invite->setLeague($league);
        $invite->setToEmail('joshteam@gmail.com');
        $manager->persist($invite);
        $manager->flush();
    }
} 
<?php

namespace MetaLeague\APIBundle\Controller;


use FOS\RestBundle\Util\Codes;

use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcherInterface;
use FOS\RestBundle\View\RouteRedirectView;
use FOS\RestBundle\Controller\Annotations\Get;

use FOS\RestBundle\View\View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Lsw\ApiCallerBundle\Call\HttpGetJson;

/**
 * Rest controller for League of Legends
 *
 * @package MetaLeague\APIBundle\Controller
 * @author Josh Phipps
 */
class LeagueOfLegendsController extends FOSRestController
{
    /**
     * List all champions.
     *
     * 
     * @Get("/lol/champions")
     * 
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     *
     *
     * @return array
     */
    public function getAllChampions()
    {
        
    }
    
    /**
     * Get recent games by summoner ID.
     * 
     * @Get("/lol/summoner/games/{summonerID}")
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when summoner not found"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="summonerID", requirements="\d+", nullable=false, description="The Summoner ID.")
     *
     * @Annotations\View()
     *
     * @param SummonerID               $summonerID      The Summoner ID.
     *
     * @return array
     */
    public function getRecentGamesBySummonerID($summonerID)
    {
        
    }
    
    
    /**
     * Get a summoner's ID by name.
     * 
     * @Get("/lol/summoner/name/{summonerName}")
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when summoner not found"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="name", requirements="*+", nullable=false, description="The Summoner's name.")
     *
     * @Annotations\View()
     * 
     * @param SummonerID               $summonerName      The Summoner name.
     *
     * @return array
     */
    public function getSummonerByName($summonerName)
    {
        $output = $this->get('api_caller')->call(new HttpGetJson("https://prod.api.pvp.net/api/lol/na/v1.1/summoner/by-name/".$summonerName,array('api_key'=>"ef24b3c7-5180-4318-9946-319330ea84f4")));
        return new \Symfony\Component\HttpFoundation\JsonResponse($output);
    }
    
    
    /**
     * Get summoner by ID.
     * 
     * @Get("/lol/summoner/{summonerID}")
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when summoner not found"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="summonerID", requirements="\d+", nullable=false, description="The Summoner ID.")
     *
     * @Annotations\View()
     *
     * @param SummonerID               $summonerID      The Summoner ID.
     *
     * @return array
     */
    public function getSummonerByID($summonerID)
    {
        
    }
    
    /**
     * Get multiple summoner's IDs by csv of names.  Max 40.
     * 
     * @Get("/lol/summoner/names/{summonerIDs}")
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when summoner not found"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="name", requirements="*+", nullable=false, description="CSV of  up to 40 summoner names.")
     *
     * @Annotations\View()
     *
     * @param SummonerIDs               $summonerIDs      CSV of Summoner IDs.
     *
     * @return array
     */
    public function getSummonerNamesByIDs($summonerIDs)
    {
        
    }
    
    
    /**
     * Get a summoner's masteries by summoner ID.
     * 
     * @Get("/lol/summoner/masteries/{summonerID}")
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when summoner not found"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="summonerID", requirements="\d+", nullable=false, description="The Summoner ID.")
     *
     * @Annotations\View()
     *
     * @param SummonerID               $summonerID      The Summoner ID.
     *
     * @return array
     */
    public function getMasteriesBySummonerID($summonerID)
    {
        
    }
    
    
    /**
     * Get a summoner's runes by summoner ID.
     * 
     * @Get("/lol/summoner/runes/{summonerID}")
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when summoner not found"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="summonerID", requirements="\d+", nullable=false, description="The Summoner ID.")
     *
     * @Annotations\View()
     *
     * @param SummonerID               $summonerID      The Summoner ID.
     *
     * @return array
     */
    public function getRunesBySummonerID($summonerID)
    {
        
    }
    
    
    /**
     * Get a summoners league.
     * 
     * @Get("/lol/summoner/league/{summonerID}")
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="summonerID", requirements="\d+", nullable=false, description="The Summoner ID.")
     *
     * @Annotations\View()
     *
     * @param SummonerID               $summonerID      The Summoner ID.
     *
     * @return array
     */
    public function getLeagueBySummonerID($summonerID)
    {
        
    }
    
    
    /**
     * Get a summoner's team.
     * @Get("/lol/summoner/team/{summonerID}")
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when summoner not found"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="summonerID", requirements="\d+", nullable=false, description="The Summoner ID.")
     *
     * @Annotations\View()
     *
     * @param SummonerID               $summonerID      The Summoner ID.
     *
     * @return array
     */
    public function getTeamBySummonerID($summonerID)
    {
        
    }
    
    
    /**
     * Get a summoners ranked stats by by summoner ID.
     * @Get("/lol/summoner/stats/ranked/{summonerID}")
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when summoner not found"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="summonerID", requirements="\d+", nullable=false, description="The Summoner ID.")
     *
     * @Annotations\View()
     *
     * @param SummonerID               $summonerID      The Summoner ID.
     *
     * @return array
     */
    public function getRankedStatsBySummonerID($summonerID)
    {
        
    }
    
    
    /**
     * Get a summoners summary stats by by summoner ID.
     * 
     * @Get("/lol/summoner/stats/summary/{summonerID}")
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when summoner not found"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="summonerID", requirements="\d+", nullable=false, description="The Summoner ID.")
     *
     * @Annotations\View()
     *
     * @param SummonerID               $summonerID      The Summoner ID.
     *
     * @return array
     */
    public function getSummaryStatsBySummonerID($summonerID)
    {
        
    }
}
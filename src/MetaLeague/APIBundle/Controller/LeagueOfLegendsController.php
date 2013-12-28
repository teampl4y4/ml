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

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Rest controller for League of Legends
 *
 * @package MetaLeague\APIBundle\Controller
 * @author Josh Phipps
 */
class LeagueOfLegendsController extends FOSRestController
{
    
    private $api_key = null;
    private $api_params = array();
    const API_URL = "https://prod.api.pvp.net/api/lol";
    const API_VERSION = 'v1.1';
    
    public function call_api($endpoint, $region = 'na', array $params = null){
        $this->api_key = $this->container->getParameter('meta_league_api.game.league_of_legends.api.key');
        $this->api_params['api_key'] = $this->api_key;
        $url = self::API_URL . "/" . $region . "/" . self::API_VERSION . "/" . $endpoint;
        $params = $params ? $params : $this->api_params;
        $output = $this->get('api_caller')->call(new HttpGetJson($url,$params));
        return new JsonResponse($output);
    }


    /**
     * List all champions.
     *
     * 
     * @Get("/lol/champions/{region}")
     * 
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     400 = "Bad request",
     *     500 = "Internal server error"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="region", requirements="{na|euw|eunw}", nullable=false, description="The Summoner's region.")
     *
     * @return array
     */
    public function getAllChampions($region)
    {
        $endpoint = "champion";
        return $this->call_api($endpoint,$region);  
    }
    
    /**
     * Get recent games by summoner ID.
     * 
     * @Get("/lol/summoner/games/{summonerID}/{region}")
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when summoner not found",
     *     400 = "Bad request",
     *     500 = "Internal server error"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="summonerID", requirements="\d+", nullable=false, description="The Summoner ID.")
     * @Annotations\QueryParam(name="region", requirements="{na|euw|eunw}", nullable=false, description="The Summoner's region.")
     *
     * @Annotations\View()
     *
     * @param SummonerID               $summonerID      The Summoner ID.
     *
     * @return array
     */
    public function getRecentGamesBySummonerID($summonerID,$region)
    {
        $endpoint = "game/by-summoner/".$summonerID."/recent";
        return $this->call_api($endpoint,$region);
    }
    
    
    /**
     * Get a summoner's ID by name.
     * 
     * @Get("/lol/summoner/name/{summonerName}/{region}")
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when summoner not found",
     *     400 = "Bad request",
     *     500 = "Internal server error"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="summonerName", requirements="*+", nullable=false, description="The Summoner's name.")
     * @Annotations\QueryParam(name="region", requirements="{na|euw|eunw}", nullable=false, description="The Summoner's region.")
     *
     * @Annotations\View()
     * 
     * @param SummonerID               $summonerName      The Summoner name.
     *
     * @return array
     */
    public function getSummonerByName($summonerName,$region)
    {
        $endpoint = "summoner/by-name/".$summonerName;
        return $this->call_api($endpoint,$region);
    }
    
    
    /**
     * Get summoner by ID.
     * 
     * @Get("/lol/summoner/{summonerID}/{region}")
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when summoner not found",
     *     400 = "Bad request",
     *     500 = "Internal server error"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="summonerID", requirements="\d+", nullable=false, description="The Summoner ID.")
     * @Annotations\QueryParam(name="region", requirements="{na|euw|eunw}", nullable=false, description="The Summoner's region.")
     *
     * @Annotations\View()
     *
     * @param SummonerID               $summonerID      The Summoner ID.
     *
     * @return array
     */
    public function getSummonerByID($summonerID, $region)
    {
        $endpoint = "summoner/".$summonerID;
        return $this->call_api($endpoint,$region);
    }
    
    /**
     * Get multiple summoner's IDs by csv of names.  Max 40.
     * 
     * @Get("/lol/summoner/names/{summonerIDs}/{region}")
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when summoner not found",
     *     400 = "Bad request",
     *     500 = "Internal server error"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="name", requirements="*+", nullable=false, description="CSV of  up to 40 summoner names.")
     * @Annotations\QueryParam(name="region", requirements="{na|euw|eunw}", nullable=false, description="The Summoner's region.")
     *
     * @Annotations\View()
     *
     * @param SummonerIDs               $summonerIDs      CSV of Summoner IDs.
     *
     * @return array
     */
    public function getSummonerNamesByIDs($summonerIDs, $region)
    {
        $endpoint = "summoner/".$summonerIDs."/name";
        return $this->call_api($endpoint,$region);
    }
    
    
    /**
     * Get a summoner's masteries by summoner ID.
     * 
     * @Get("/lol/summoner/masteries/{summonerID}/{region}")
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when summoner not found",
     *     400 = "Bad request",
     *     500 = "Internal server error"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="summonerID", requirements="\d+", nullable=false, description="The Summoner ID.")
     * @Annotations\QueryParam(name="region", requirements="{na|euw|eunw}", nullable=false, description="The Summoner's region.")
     *
     * @Annotations\View()
     *
     * @param SummonerID               $summonerID      The Summoner ID.
     *
     * @return array
     */
    public function getMasteriesBySummonerID($summonerID, $region)
    {
        $endpoint = "summoner/".$summonerID."/masteries";
        return $this->call_api($endpoint,$region);
    }
    
    
    /**
     * Get a summoner's runes by summoner ID.
     * 
     * @Get("/lol/summoner/runes/{summonerID}/{region}")
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when summoner not found",
     *     400 = "Bad request",
     *     500 = "Internal server error"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="summonerID", requirements="\d+", nullable=false, description="The Summoner ID.")
     * @Annotations\QueryParam(name="region", requirements="{na|euw|eunw}", nullable=false, description="The Summoner's region.")
     *
     * @Annotations\View()
     *
     * @param SummonerID               $summonerID      The Summoner ID.
     *
     * @return array
     */
    public function getRunesBySummonerID($summonerID, $region)
    {
        $endpoint = "summoner/".$summonerID."/runes";
        return $this->call_api($endpoint,$region);
    }
    
    
    /**
     * Get a summoners league.
     * 
     * @Get("/lol/summoner/league/{summonerID}/{region}")
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     400 = "Bad request",
     *     500 = "Internal server error"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="summonerID", requirements="\d+", nullable=false, description="The Summoner ID.")
     * @Annotations\QueryParam(name="region", requirements="{na|euw|eunw|br|tr}", nullable=false, description="The Summoner's region.")
     *
     * @Annotations\View()
     *
     * @param SummonerID               $summonerID      The Summoner ID.
     *
     * @return array
     */
    public function getLeagueBySummonerID($summonerID, $region)
    {
        $endpoint = "league/by-summoner/".$summonerID;
        return $this->call_api($endpoint,$region);
    }
    
    
    /**
     * Get a summoner's team.
     * @Get("/lol/summoner/team/{summonerID}/{region}")
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     400 = "Bad request",
     *     500 = "Internal server error"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="summonerID", requirements="\d+", nullable=false, description="The Summoner ID.")
     * @Annotations\QueryParam(name="region", requirements="{na|euw|eunw|br|tr}", nullable=false, description="The Summoner's region.")
     *
     * @Annotations\View()
     *
     * @param SummonerID               $summonerID      The Summoner ID.
     *
     * @return array
     */
    public function getTeamBySummonerID($summonerID, $region)
    {
        $endpoint = "team/by-summoner/".$summonerID;
        return $this->call_api($endpoint,$region);
    }
    
    
    /**
     * Get a summoners ranked stats by by summoner ID.
     * @Get("/lol/summoner/stats/ranked/{summonerID}/{region}")
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when summoner not found",
     *     400 = "Bad request",
     *     500 = "Internal server error"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="summonerID", requirements="\d+", nullable=false, description="The Summoner ID.")
     * @Annotations\QueryParam(name="region", requirements="{na|euw|eunw}", nullable=false, description="The Summoner's region.")
     *
     * @Annotations\View()
     *
     * @param SummonerID               $summonerID      The Summoner ID.
     *
     * @return array
     */
    public function getRankedStatsBySummonerID($summonerID, $region)
    {
        $endpoint = "stats/by-summoner/".$summonerID."/ranked";
        return $this->call_api($endpoint,$region);
    }
    
    
    /**
     * Get a summoners summary stats by by summoner ID.
     * 
     * @Get("/lol/summoner/stats/summary/{summonerID}/{region}")
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when summoner not found",
     *     400 = "Bad request",
     *     500 = "Internal server error"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="summonerID", requirements="\d+", nullable=false, description="The Summoner ID.")
     * @Annotations\QueryParam(name="region", requirements="{na|euw|eunw}", nullable=false, description="The Summoner's region.")
     *
     * @Annotations\View()
     *
     * @param SummonerID               $summonerID      The Summoner ID.
     *
     * @return array
     */
    public function getSummaryStatsBySummonerID($summonerID, $region)
    {
        $endpoint = "stats/by-summoner/".$summonerID."/summary";
        return $this->call_api($endpoint,$region);  
    }
}
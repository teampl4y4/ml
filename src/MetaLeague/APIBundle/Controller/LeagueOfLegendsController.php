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
     * GET Route annotation.
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
     * @param SummonerID               $summonerID      The Summoner ID.
     *
     * @return array
     */
    public function getSummonerByName($summonerID)
    {
        
    }
    
    
    /**
     * Get recent games by summoner ID.
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
    public function getSummonerByID($summonerID)
    {
        
    }
    
    /**
     * Get multiple summoner's IDs by csv of names.  Max 40.
     *
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
    public function getTeamBySummonerID($summonerID)
    {
        
    }
    
    
    /**
     * Get a summoners ranked stats by by summoner ID.
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
     * GET Route annotation.
     * @Get("/lol/stats/summary/{summonerID}")
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
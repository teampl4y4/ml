<?php

namespace MetaLeague\APIBundle\Controller;


use FOS\RestBundle\Util\Codes;

use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcherInterface;
use FOS\RestBundle\View\RouteRedirectView;

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
     * List all notes.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     *
     *
     * @Annotations\View()
     *
     * @param Request               $request      the request object
     * @param ParamFetcherInterface $paramFetcher param fetcher service
     *
     * @return array
     */
    public function getAllChampions(Request $request, ParamFetcherInterface $paramFetcher)
    {
        
    }
    
    /**
     * Get recent games by summoner ID.
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
     * @param Request               $request      the request object
     * @param ParamFetcherInterface $paramFetcher param fetcher service
     *
     * @return array
     */
    public function getRecentGamesBySummonerID(Request $request, ParamFetcherInterface $paramFetcher)
    {
        
    }
    
    public function getSummonerByName(Request $request, ParamFetcherInterface $paramFetcher)
    {
        
    }
    
    public function getSummonerByID(Request $request, ParamFetcherInterface $paramFetcher)
    {
        
    }
    
    public function getSummonerNamesByIDs(Request $request, ParamFetcherInterface $paramFetcher)
    {
        
    }
    
    public function getMasteriesBySummonerID(Request $request, ParamFetcherInterface $paramFetcher)
    {
        
    }
    
    public function getRunesBySummonerID(Request $request, ParamFetcherInterface $paramFetcher)
    {
        
    }
    
    public function getLeagueBySummonerID(Request $request, ParamFetcherInterface $paramFetcher)
    {
        
    }
    
    public function getTeamBySummonerID(Request $request, ParamFetcherInterface $paramFetcher)
    {
        
    }
    
    public function getRankedStatsBySummonerID(Request $request, ParamFetcherInterface $paramFetcher)
    {
        
    }
    
    public function getSummaryStatsBySummonerID(Request $request, ParamFetcherInterface $paramFetcher)
    {
        
    }
}
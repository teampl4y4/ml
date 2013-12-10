<?php

namespace MetaLeague\FantasyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class DefaultController (The default authenticated controller)
 * @package MetaLeague\FantasyBundle\Controller
 *
 * @Route("/fantasy")
 */
class DefaultController extends Controller
{
    /**
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/", name="_meta_loggedin_home")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}

<?php

namespace MetaLeague\FantasyBundle\Controller;

use Doctrine\ORM\EntityManager;
use MetaLeague\FantasyBundle\Entity\League;
use MetaLeague\FantasyBundle\Entity\User;
use MetaLeague\FantasyBundle\Form\LeagueType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Acl\Permission\MaskBuilder;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Class LeagueController
 * @package MetaLeague\FantasyBundle\Controller
 * @Route ("/fantasy/league")
 */
class LeagueController extends Controller
{

    /**
     * @param $id
     *
     * @Route("/view/{id}", name="_meta_league_view")
     * @Template()
     */
    public function viewAction($id)
    {

        /** @var EntityManager $em */
        $em     = $this->get('doctrine.orm.entity_manager');
        $league = $em->getRepository('MetaLeagueFantasyBundle:League')->findOneBy(array('id' => $id));

        if(!$league instanceof League) {
            throw new NotFoundHttpException('League not found');
        }

        if (false === $this->get('security.context')->isGranted('VIEW', $league)) {
            throw new AccessDeniedException('Access Denied: User can not view league.');
        }

        return array('id' => $id);
    }

    /**
     * @Route("/create", name="_meta_league_create")
     * @Template()
     */
    public function createAction(Request $request)
    {
        $league = new League();
        $form = $this->createForm(new LeagueType(), $league);

        $form->handleRequest($request);

        if ($form->isValid()) {

            /** @var EntityManager $em */
            $em = $this->get('doctrine.orm.entity_manager');

            /** @var User $user */
            $user = $this->get('security.context')->getToken()->getUser();

            $league->setCommissioner($user);

            $em->persist($league);
            $em->flush();

            $aclManager = $this->get('problematic.acl_manager');
            $aclManager->setObjectPermission($league, MaskBuilder::MASK_OPERATOR, $user);

            return $this->redirect($this->generateUrl('_meta_league_view', array('id' => $league->getId())));
        }

        return array( 'form' => $form->createView() );
    }

}

<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/game')) {
            // admin_game
            if (rtrim($pathinfo, '/') === '/game') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_game;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_game');
                }

                return array (  '_controller' => 'MetaLeague\\FantasyBundle\\Controller\\GameController::indexAction',  '_route' => 'admin_game',);
            }
            not_admin_game:

            // admin_game_create
            if ($pathinfo === '/game/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_game_create;
                }

                return array (  '_controller' => 'MetaLeague\\FantasyBundle\\Controller\\GameController::createAction',  '_route' => 'admin_game_create',);
            }
            not_admin_game_create:

            // admin_game_new
            if ($pathinfo === '/game/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_game_new;
                }

                return array (  '_controller' => 'MetaLeague\\FantasyBundle\\Controller\\GameController::newAction',  '_route' => 'admin_game_new',);
            }
            not_admin_game_new:

            // admin_game_show
            if (preg_match('#^/game/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_game_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_game_show')), array (  '_controller' => 'MetaLeague\\FantasyBundle\\Controller\\GameController::showAction',));
            }
            not_admin_game_show:

            // admin_game_edit
            if (preg_match('#^/game/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_game_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_game_edit')), array (  '_controller' => 'MetaLeague\\FantasyBundle\\Controller\\GameController::editAction',));
            }
            not_admin_game_edit:

            // admin_game_update
            if (preg_match('#^/game/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_admin_game_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_game_update')), array (  '_controller' => 'MetaLeague\\FantasyBundle\\Controller\\GameController::updateAction',));
            }
            not_admin_game_update:

            // admin_game_delete
            if (preg_match('#^/game/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_admin_game_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_game_delete')), array (  '_controller' => 'MetaLeague\\FantasyBundle\\Controller\\GameController::deleteAction',));
            }
            not_admin_game_delete:

        }

        // metaleague_site_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'metaleague_site_default_index');
            }

            return array (  '_controller' => 'MetaLeague\\SiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'metaleague_site_default_index',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

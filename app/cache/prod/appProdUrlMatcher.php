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

        // _admin_nom
        if (0 === strpos($pathinfo, '/admin/nom') && preg_match('#^/admin/nom/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_nom')), array (  '_controller' => 'Sio\\SemiBundle\\Controller\\AdminController::indexAction',));
        }

        // sio_semi_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sio_semi_default_index')), array (  '_controller' => 'Sio\\SemiBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/gestionnaire')) {
            // sio_semi_gestionnaire_export
            if ($pathinfo === '/gestionnaire/export') {
                return array (  '_controller' => 'Sio\\SemiBundle\\Controller\\GestionnaireController::exportAction',  '_route' => 'sio_semi_gestionnaire_export',);
            }

            // _gestionnaire_liste
            if ($pathinfo === '/gestionnaire/liste') {
                return array (  '_controller' => 'Sio\\SemiBundle\\Controller\\GestionnaireController::listeAction',  '_route' => '_gestionnaire_liste',);
            }

        }

        if (0 === strpos($pathinfo, '/participant')) {
            // _participant_index
            if (0 === strpos($pathinfo, '/participant/index') && preg_match('#^/participant/index/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_participant_index')), array (  '_controller' => 'Sio\\SemiBundle\\Controller\\ParticipantController::indexAction',));
            }

            // _participant_liste
            if (rtrim($pathinfo, '/') === '/participant/liste') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_participant_liste');
                }

                return array (  '_controller' => 'Sio\\SemiBundle\\Controller\\ParticipantController::listeParticipantsAction',  '_route' => '_participant_liste',);
            }

            // _participant_nombre
            if (rtrim($pathinfo, '/') === '/participant/nombre') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_participant_nombre');
                }

                return array (  '_controller' => 'Sio\\SemiBundle\\Controller\\ParticipantController::NombreParticipantsAction',  '_route' => '_participant_nombre',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

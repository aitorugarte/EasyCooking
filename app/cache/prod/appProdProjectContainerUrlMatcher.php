<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
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

        // cooker_cook_principal
        if (preg_match('#^/(?P<_locale>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'cooker_cook_principal');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooker_cook_principal')), array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::principalAction',));
        }

        // cooker_cook_recetas
        if (preg_match('#^/(?P<_locale>[^/]++)/recetas$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooker_cook_recetas')), array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::recetasAction',));
        }

        // cooker_cook_ingredientes
        if (preg_match('#^/(?P<_locale>[^/]++)/ingredientes$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooker_cook_ingredientes')), array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::ingredientesAction',));
        }

        // cooker_cook_platos
        if (preg_match('#^/(?P<_locale>[^/]++)/platos$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooker_cook_platos')), array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::platosAction',));
        }

        // cooker_cook_contact
        if (preg_match('#^/(?P<_locale>[^/]++)/contact$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooker_cook_contact')), array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::contactAction',));
        }

        // cooker_cook_showReceta
        if (preg_match('#^/(?P<_locale>[^/]++)/receta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooker_cook_showReceta')), array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::showRecetaAction',));
        }

        // cooker_cook_showIngr
        if (preg_match('#^/(?P<_locale>[^/]++)/ingrediente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooker_cook_showIngr')), array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::showIngrAction',));
        }

        // cooker_cook_showPlato
        if (preg_match('#^/(?P<_locale>[^/]++)/plato/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooker_cook_showPlato')), array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::showPlatoAction',));
        }

        // cooker_comentario_create
        if (preg_match('#^/(?P<_locale>[^/]++)/comentario/(?P<receta_id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_cooker_comentario_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooker_comentario_create')), array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\ComentarioController::createAction',));
        }
        not_cooker_comentario_create:

        // cooker_admin_login
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/login$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooker_admin_login')), array (  '_controller' => 'Cooker\\AdminBundle\\Controller\\SecurityController::loginAction',));
        }

        // cooker_admin_login_check
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/login_check$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooker_admin_login_check')), array ());
        }

        // cooker_admin_logout
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/logout$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooker_admin_logout')), array ());
        }

        // easyadmin
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/controlpanel/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'easyadmin');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'easyadmin')), array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',));
        }

        // admin
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/controlpanel/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin')), array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

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

        // cooker_cook_show
        if (0 === strpos($pathinfo, '/show') && preg_match('#^/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooker_cook_show')), array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::showAction',));
        }

        // cooker_comentario_create
        if (0 === strpos($pathinfo, '/comentario') && preg_match('#^/comentario/(?P<receta_id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_cooker_comentario_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooker_comentario_create')), array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\ComentarioController::createAction',));
        }
        not_cooker_comentario_create:

        // cooker_cook_principal
        if ('' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'cooker_cook_principal');
            }

            return array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::principalAction',  '_route' => 'cooker_cook_principal',);
        }

        // cooker_cook_recetas
        if ('/recetas' === $pathinfo) {
            return array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::recetasAction',  '_route' => 'cooker_cook_recetas',);
        }

        // cooker_cook_ingredientes
        if ('/ingredientes' === $pathinfo) {
            return array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::ingredientesAction',  '_route' => 'cooker_cook_ingredientes',);
        }

        // cooker_cook_contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::contactAction',  '_route' => 'cooker_cook_contact',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

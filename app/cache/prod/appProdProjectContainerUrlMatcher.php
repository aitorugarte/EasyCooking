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

        // cooker_cook_list
        if ('/recetas' === $pathinfo) {
            return array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::listAction',  '_route' => 'cooker_cook_list',);
        }

        // cooker_cook_show
        if (0 === strpos($pathinfo, '/show') && preg_match('#^/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooker_cook_show')), array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::showAction',));
        }

        // cooker_comment_create
        if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?P<receta_id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_cooker_comment_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cooker_comment_create')), array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CommentController::createAction',));
        }
        not_cooker_comment_create:

        // cooker_cook_principal
        if ('/principal' === $pathinfo) {
            return array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::principalAction',  '_route' => 'cooker_cook_principal',);
        }

        // cooker_cook_recetas
        if ('/recetas' === $pathinfo) {
            return array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::listAction',  '_route' => 'cooker_cook_recetas',);
        }

        // cooker_cook_contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::contactAction',  '_route' => 'cooker_cook_contact',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

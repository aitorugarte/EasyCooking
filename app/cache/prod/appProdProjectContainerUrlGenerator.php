<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'cooker_cook_principal' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::principalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cooker_cook_recetas' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::recetasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recetas',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cooker_cook_ingredientes' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::ingredientesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ingredientes',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cooker_cook_platos' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::platosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platos',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cooker_cook_contact' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cooker_cook_showReceta' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::showRecetaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/receta',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cooker_cook_showIngr' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::showIngrAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ingrediente',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cooker_cook_showPlato' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::showPlatoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/plato',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cooker_comentario_create' => array (  0 =>   array (    0 => '_locale',    1 => 'receta_id',  ),  1 =>   array (    '_controller' => 'Cooker\\CookingBundle\\Controller\\ComentarioController::createAction',  ),  2 =>   array (    'post_id' => '\\d+',    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'receta_id',    ),    1 =>     array (      0 => 'text',      1 => '/comentario',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cooker_admin_login' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Cooker\\AdminBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cooker_admin_login_check' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login_check',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cooker_admin_logout' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/logout',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'easyadmin' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/controlpanel/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/controlpanel/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

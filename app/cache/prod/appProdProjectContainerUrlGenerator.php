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
        'cooker_cook_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cooker_comentario_create' => array (  0 =>   array (    0 => 'receta_id',  ),  1 =>   array (    '_controller' => 'Cooker\\CookingBundle\\Controller\\ComentarioController::createAction',  ),  2 =>   array (    'post_id' => '\\d+',    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'receta_id',    ),    1 =>     array (      0 => 'text',      1 => '/comentario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cooker_cook_principal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::principalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cooker_cook_recetas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::recetasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recetas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cooker_cook_ingredientes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::ingredientesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ingredientes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cooker_cook_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cooker\\CookingBundle\\Controller\\CookController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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

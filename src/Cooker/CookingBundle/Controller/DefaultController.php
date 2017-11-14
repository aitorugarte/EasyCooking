<?php

namespace Cooker\CookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CookerCookingBundle:Default:index.html.twig');
    }
}

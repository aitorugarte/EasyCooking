<?php

/* CookerCookingBundle::menu.html.twig */
class __TwigTemplate_18a5e22cd4564462b933eb273edac276de0086c317d77ec24c4e43a1845c7ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "CookerCookingBundle::menu.html.twig", 2);
        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cadab6487fed140f56bc48752cc0bdf12d4e69c0ec1e6d2ccbe67029cf82d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cadab6487fed140f56bc48752cc0bdf12d4e69c0ec1e6d2ccbe67029cf82d7f->enter($__internal_5cadab6487fed140f56bc48752cc0bdf12d4e69c0ec1e6d2ccbe67029cf82d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cadab6487fed140f56bc48752cc0bdf12d4e69c0ec1e6d2ccbe67029cf82d7f->leave($__internal_5cadab6487fed140f56bc48752cc0bdf12d4e69c0ec1e6d2ccbe67029cf82d7f_prof);

    }

    // line 4
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_124649f046a97e34b92c7d7f78f6596b220dc57594bd96763ca23d94ad97cdd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124649f046a97e34b92c7d7f78f6596b220dc57594bd96763ca23d94ad97cdd9->enter($__internal_124649f046a97e34b92c7d7f78f6596b220dc57594bd96763ca23d94ad97cdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 5
        echo "\t
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li class=\"selected\"><div><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Inicio</a></div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_recetas");
        echo "\">Recetas</a></div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_platos");
        echo "\">Platos</a></div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_ingredientes");
        echo "\">Ingredientes</a></div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">Contacto</a></div></li>
\t\t\t\t\t";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_admin_logout");
            echo "\">Salir</a></div></li>
\t\t\t\t\t";
        } else {
            // line 14
            echo " 
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_admin_login");
            echo "\">Entrar</a></div></li>
\t\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t</ul>
\t
\t
";
        
        $__internal_124649f046a97e34b92c7d7f78f6596b220dc57594bd96763ca23d94ad97cdd9->leave($__internal_124649f046a97e34b92c7d7f78f6596b220dc57594bd96763ca23d94ad97cdd9_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 17,  75 => 15,  72 => 14,  66 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 5,  34 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/menu.html.twig #}
{% extends '::base.html.twig' %}

{% block navigation %}
\t
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li class=\"selected\"><div><a href=\"{{ path('cooker_cook_principal')}}\">Inicio</a></div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_cook_recetas')}}\">Recetas</a></div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_cook_platos')}}\">Platos</a></div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_cook_ingredientes')}}\">Ingredientes</a></div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_cook_contact')}}\">Contacto</a></div></li>
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_admin_logout')}}\">Salir</a></div></li>
\t\t\t\t\t{% else %} 
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_admin_login')}}\">Entrar</a></div></li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t
\t
{% endblock %}

", "CookerCookingBundle::menu.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/menu.html.twig");
    }
}

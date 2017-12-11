<?php

/* CookerCookingBundle::layout.html.twig */
class __TwigTemplate_4545167b74369a55e397442bf576ae0649c5cc4fd25a95b1a8f23406df3e5228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "CookerCookingBundle::layout.html.twig", 2);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a6e4784176107bfa9b8d3d93f0f24cf8e848ec740121513f8ab7e7a36854bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6e4784176107bfa9b8d3d93f0f24cf8e848ec740121513f8ab7e7a36854bfa->enter($__internal_2a6e4784176107bfa9b8d3d93f0f24cf8e848ec740121513f8ab7e7a36854bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a6e4784176107bfa9b8d3d93f0f24cf8e848ec740121513f8ab7e7a36854bfa->leave($__internal_2a6e4784176107bfa9b8d3d93f0f24cf8e848ec740121513f8ab7e7a36854bfa_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_94e5bbc6b6cdb0d62d38d921326c6949f721ae1fb3573e98c9cdbf61237cca56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e5bbc6b6cdb0d62d38d921326c6949f721ae1fb3573e98c9cdbf61237cca56->enter($__internal_94e5bbc6b6cdb0d62d38d921326c6949f721ae1fb3573e98c9cdbf61237cca56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "
    B&uacutesqueda avanzada:
\t<form class=\"search\">

\t<input type=\"search\" name=\"Search\" id=\"search\" placeholder=\"Introduzca texto\">
\t<input type=\"button\" value=\"Buscar\">

\t</form>

\t<ul id=\"redes\">
\t\t<li><a href=\"https://twitter.com/\" target=\"_blank\">Twitter</a></li>
\t\t<li><a href=\"https://www.instagram.com/\" target=\"_blank\">Instagram</a></li>
\t\t<li><a href=\"https://www.facebook.com/\" target=\"_blank\">Facebook</a></li>
\t</ul>

";
        
        $__internal_94e5bbc6b6cdb0d62d38d921326c6949f721ae1fb3573e98c9cdbf61237cca56->leave($__internal_94e5bbc6b6cdb0d62d38d921326c6949f721ae1fb3573e98c9cdbf61237cca56_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}

{% block sidebar %}

    B&uacutesqueda avanzada:
\t<form class=\"search\">

\t<input type=\"search\" name=\"Search\" id=\"search\" placeholder=\"Introduzca texto\">
\t<input type=\"button\" value=\"Buscar\">

\t</form>

\t<ul id=\"redes\">
\t\t<li><a href=\"https://twitter.com/\" target=\"_blank\">Twitter</a></li>
\t\t<li><a href=\"https://www.instagram.com/\" target=\"_blank\">Instagram</a></li>
\t\t<li><a href=\"https://www.facebook.com/\" target=\"_blank\">Facebook</a></li>
\t</ul>

{% endblock %}
", "CookerCookingBundle::layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\layout.html.twig");
    }
}

<?php

/* CookerCookingBundle::sidebar.html.twig */
class __TwigTemplate_f4694db86a72d91470ebc77d9da221d108312a58e4e1ad342fc93737cb8d9577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "CookerCookingBundle::sidebar.html.twig", 2);
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
        $__internal_27d4962358c29274db5d6a61a069a4f9cf39834eb15c3ee5040b8f7490bdfb33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d4962358c29274db5d6a61a069a4f9cf39834eb15c3ee5040b8f7490bdfb33->enter($__internal_27d4962358c29274db5d6a61a069a4f9cf39834eb15c3ee5040b8f7490bdfb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::sidebar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27d4962358c29274db5d6a61a069a4f9cf39834eb15c3ee5040b8f7490bdfb33->leave($__internal_27d4962358c29274db5d6a61a069a4f9cf39834eb15c3ee5040b8f7490bdfb33_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ceda9eb29c97ebe9652d1be66ec29fbf2afebbf1b9c2eaa27af7bba78ec3c4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceda9eb29c97ebe9652d1be66ec29fbf2afebbf1b9c2eaa27af7bba78ec3c4b2->enter($__internal_ceda9eb29c97ebe9652d1be66ec29fbf2afebbf1b9c2eaa27af7bba78ec3c4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_ceda9eb29c97ebe9652d1be66ec29fbf2afebbf1b9c2eaa27af7bba78ec3c4b2->leave($__internal_ceda9eb29c97ebe9652d1be66ec29fbf2afebbf1b9c2eaa27af7bba78ec3c4b2_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle::sidebar.html.twig";
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
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/sidebar.html.twig #}
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
", "CookerCookingBundle::sidebar.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/sidebar.html.twig");
    }
}

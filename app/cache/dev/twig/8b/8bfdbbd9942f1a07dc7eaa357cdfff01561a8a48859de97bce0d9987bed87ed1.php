<?php

/* CookerCookingBundle::layout.html.twig */
class __TwigTemplate_42d1e9877eff77ca1ba47430962403d84569116d83475a8ac69e4695fe283784 extends Twig_Template
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
        $__internal_a0820c3570966042c7c7673713e422f21293997f2497520652bad049c9cb50af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0820c3570966042c7c7673713e422f21293997f2497520652bad049c9cb50af->enter($__internal_a0820c3570966042c7c7673713e422f21293997f2497520652bad049c9cb50af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0820c3570966042c7c7673713e422f21293997f2497520652bad049c9cb50af->leave($__internal_a0820c3570966042c7c7673713e422f21293997f2497520652bad049c9cb50af_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_02c55c29f54b9c327b07676eb3a255b6f112be6a341abf6cb6aa3a67c48c68df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c55c29f54b9c327b07676eb3a255b6f112be6a341abf6cb6aa3a67c48c68df->enter($__internal_02c55c29f54b9c327b07676eb3a255b6f112be6a341abf6cb6aa3a67c48c68df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    B&uacutesqueda avanzada:
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
        
        $__internal_02c55c29f54b9c327b07676eb3a255b6f112be6a341abf6cb6aa3a67c48c68df->leave($__internal_02c55c29f54b9c327b07676eb3a255b6f112be6a341abf6cb6aa3a67c48c68df_prof);

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

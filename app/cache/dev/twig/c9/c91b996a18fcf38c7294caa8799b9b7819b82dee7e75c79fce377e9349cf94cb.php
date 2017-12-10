<?php

/* CookerCookingBundle::layout.html.twig */
class __TwigTemplate_80bf05fd9760759c47d4d526d09cffadcf4d14e8eeeeeff5695b11492a136a5d extends Twig_Template
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
        $__internal_c7031596985414b03002a1daa6fe1b1a5880ddc4fc05d599dd3b7dd67b050c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7031596985414b03002a1daa6fe1b1a5880ddc4fc05d599dd3b7dd67b050c16->enter($__internal_c7031596985414b03002a1daa6fe1b1a5880ddc4fc05d599dd3b7dd67b050c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7031596985414b03002a1daa6fe1b1a5880ddc4fc05d599dd3b7dd67b050c16->leave($__internal_c7031596985414b03002a1daa6fe1b1a5880ddc4fc05d599dd3b7dd67b050c16_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_95d11b7b8ead4b30d2d4eccfff1d6a6a0d4a7216b9a83cb9847c59b47f636d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d11b7b8ead4b30d2d4eccfff1d6a6a0d4a7216b9a83cb9847c59b47f636d90->enter($__internal_95d11b7b8ead4b30d2d4eccfff1d6a6a0d4a7216b9a83cb9847c59b47f636d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_95d11b7b8ead4b30d2d4eccfff1d6a6a0d4a7216b9a83cb9847c59b47f636d90->leave($__internal_95d11b7b8ead4b30d2d4eccfff1d6a6a0d4a7216b9a83cb9847c59b47f636d90_prof);

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
", "CookerCookingBundle::layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/layout.html.twig");
    }
}

<?php

/* CookerCookingBundle::sidebar.html.twig */
class __TwigTemplate_4b5f3c147218d2856bfdbf93a9be66e72e503bdc8e00a8ddfa5f3a6dce7371ee extends Twig_Template
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
        $__internal_96ee4551fc724df3503970d45b2c4787371c06d0ef1fb5356a29d0cf85fdf1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ee4551fc724df3503970d45b2c4787371c06d0ef1fb5356a29d0cf85fdf1cf->enter($__internal_96ee4551fc724df3503970d45b2c4787371c06d0ef1fb5356a29d0cf85fdf1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::sidebar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96ee4551fc724df3503970d45b2c4787371c06d0ef1fb5356a29d0cf85fdf1cf->leave($__internal_96ee4551fc724df3503970d45b2c4787371c06d0ef1fb5356a29d0cf85fdf1cf_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_06b95c46220437e7efd8b77e0f320cae176ba65832ca7d1d669b69f6edad6acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b95c46220437e7efd8b77e0f320cae176ba65832ca7d1d669b69f6edad6acc->enter($__internal_06b95c46220437e7efd8b77e0f320cae176ba65832ca7d1d669b69f6edad6acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_06b95c46220437e7efd8b77e0f320cae176ba65832ca7d1d669b69f6edad6acc->leave($__internal_06b95c46220437e7efd8b77e0f320cae176ba65832ca7d1d669b69f6edad6acc_prof);

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

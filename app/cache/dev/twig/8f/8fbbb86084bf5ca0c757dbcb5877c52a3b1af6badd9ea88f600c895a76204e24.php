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
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5472cfb2bf20ee05379adb2f0cb11985ff9509da00f0d643d0b99234da7350c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5472cfb2bf20ee05379adb2f0cb11985ff9509da00f0d643d0b99234da7350c->enter($__internal_a5472cfb2bf20ee05379adb2f0cb11985ff9509da00f0d643d0b99234da7350c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5472cfb2bf20ee05379adb2f0cb11985ff9509da00f0d643d0b99234da7350c->leave($__internal_a5472cfb2bf20ee05379adb2f0cb11985ff9509da00f0d643d0b99234da7350c_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_cac63fa5cc33cc3bb0b2a663aa234467cd3edf9007ac51ca5bde23e6e9f83d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac63fa5cc33cc3bb0b2a663aa234467cd3edf9007ac51ca5bde23e6e9f83d18->enter($__internal_cac63fa5cc33cc3bb0b2a663aa234467cd3edf9007ac51ca5bde23e6e9f83d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "
";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
<div class=\"sidebar\">
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
</div>
";
        
        $__internal_cac63fa5cc33cc3bb0b2a663aa234467cd3edf9007ac51ca5bde23e6e9f83d18->leave($__internal_cac63fa5cc33cc3bb0b2a663aa234467cd3edf9007ac51ca5bde23e6e9f83d18_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ace6307e5e329b3449cfd043e60d436b8333d4b86cc1ca4282a81b0da364094d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace6307e5e329b3449cfd043e60d436b8333d4b86cc1ca4282a81b0da364094d->enter($__internal_ace6307e5e329b3449cfd043e60d436b8333d4b86cc1ca4282a81b0da364094d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/sidebar.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_ace6307e5e329b3449cfd043e60d436b8333d4b86cc1ca4282a81b0da364094d->leave($__internal_ace6307e5e329b3449cfd043e60d436b8333d4b86cc1ca4282a81b0da364094d_prof);

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
        return array (  80 => 8,  75 => 7,  69 => 6,  46 => 10,  44 => 6,  41 => 5,  35 => 4,  11 => 2,);
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

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('css/sidebar.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}

<div class=\"sidebar\">
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
</div>
{% endblock %}
", "CookerCookingBundle::layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\layout.html.twig");
    }
}

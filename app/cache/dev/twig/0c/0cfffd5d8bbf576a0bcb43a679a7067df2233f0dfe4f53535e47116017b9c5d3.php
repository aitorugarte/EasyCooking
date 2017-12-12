<?php

/* CookerCookingBundle:Cook:showIngr.html.twig */
class __TwigTemplate_8e1c2e168e86c33e653fb6fcdd6759dfef4cecd392b33167c2a387a196229e29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::sidebar.html.twig", "CookerCookingBundle:Cook:showIngr.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CookerCookingBundle::sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf5b7efd48d02bda23ac0cefee2940f599136c54751ac356df5ce08aee8aed64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5b7efd48d02bda23ac0cefee2940f599136c54751ac356df5ce08aee8aed64->enter($__internal_cf5b7efd48d02bda23ac0cefee2940f599136c54751ac356df5ce08aee8aed64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:showIngr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf5b7efd48d02bda23ac0cefee2940f599136c54751ac356df5ce08aee8aed64->leave($__internal_cf5b7efd48d02bda23ac0cefee2940f599136c54751ac356df5ce08aee8aed64_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_880c4361a0d5b13a9498ea1e2fdf1db279b4cd23075e78371197cf9e4e9fdd08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_880c4361a0d5b13a9498ea1e2fdf1db279b4cd23075e78371197cf9e4e9fdd08->enter($__internal_880c4361a0d5b13a9498ea1e2fdf1db279b4cd23075e78371197cf9e4e9fdd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingrediente"] ?? $this->getContext($context, "ingrediente")), "nombre", array()), "html", null, true);
        
        $__internal_880c4361a0d5b13a9498ea1e2fdf1db279b4cd23075e78371197cf9e4e9fdd08->leave($__internal_880c4361a0d5b13a9498ea1e2fdf1db279b4cd23075e78371197cf9e4e9fdd08_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d6dca2c17aed5af17d294d29ec049f234d1df48eaa7e39ea7a5a17028228959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6dca2c17aed5af17d294d29ec049f234d1df48eaa7e39ea7a5a17028228959->enter($__internal_2d6dca2c17aed5af17d294d29ec049f234d1df48eaa7e39ea7a5a17028228959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>Recetas para el ingrediente: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingrediente"] ?? $this->getContext($context, "ingrediente")), "nombre", array()), "html", null, true);
        echo "</h1>
\t
\t<ul>
\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 10
            echo "\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</ul>

";
        
        $__internal_2d6dca2c17aed5af17d294d29ec049f234d1df48eaa7e39ea7a5a17028228959->leave($__internal_2d6dca2c17aed5af17d294d29ec049f234d1df48eaa7e39ea7a5a17028228959_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:showIngr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  64 => 10,  60 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/showIngr.html.twig #}
{% extends 'CookerCookingBundle::sidebar.html.twig' %}
{% block title %}{{ ingrediente.nombre }}{% endblock %}

{% block body %}
\t<h1>Recetas para el ingrediente: {{ ingrediente.nombre }}</h1>
\t
\t<ul>
\t{% for receta in recetas %}
\t<li><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></li>
\t{% endfor %}
\t</ul>

{% endblock %}
", "CookerCookingBundle:Cook:showIngr.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/showIngr.html.twig");
    }
}

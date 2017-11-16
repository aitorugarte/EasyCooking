<?php

/* CookerCookingBundle:Cook:ingredientes.html.twig */
class __TwigTemplate_e1daeca4cd348132df78f0b6e05fa4a26d9888e9e7b811dd979139a1cd125d03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:ingredientes.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CookerCookingBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfea0db8ee65000c47d553b3ed4e02c76a1220bbe1be2cf9607cbe338e223fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfea0db8ee65000c47d553b3ed4e02c76a1220bbe1be2cf9607cbe338e223fcc->enter($__internal_cfea0db8ee65000c47d553b3ed4e02c76a1220bbe1be2cf9607cbe338e223fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfea0db8ee65000c47d553b3ed4e02c76a1220bbe1be2cf9607cbe338e223fcc->leave($__internal_cfea0db8ee65000c47d553b3ed4e02c76a1220bbe1be2cf9607cbe338e223fcc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67b3b44ee2d87d28328fd778041130317554a54913232ef18a0dad2ef9420d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b3b44ee2d87d28328fd778041130317554a54913232ef18a0dad2ef9420d12->enter($__internal_67b3b44ee2d87d28328fd778041130317554a54913232ef18a0dad2ef9420d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_67b3b44ee2d87d28328fd778041130317554a54913232ef18a0dad2ef9420d12->leave($__internal_67b3b44ee2d87d28328fd778041130317554a54913232ef18a0dad2ef9420d12_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_36e49c23beb7b707bbe683b226b38d8542c43c1100985a8cb43845caf56af5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e49c23beb7b707bbe683b226b38d8542c43c1100985a8cb43845caf56af5e7->enter($__internal_36e49c23beb7b707bbe683b226b38d8542c43c1100985a8cb43845caf56af5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredientes"] ?? $this->getContext($context, "ingredientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingrediente"]) {
            // line 7
            echo "        <article class=\"receta\">
            <header>
                <h2>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "nombre", array()), "html", null, true);
            echo "</h2>
            </header>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingrediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_36e49c23beb7b707bbe683b226b38d8542c43c1100985a8cb43845caf56af5e7->leave($__internal_36e49c23beb7b707bbe683b226b38d8542c43c1100985a8cb43845caf56af5e7_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:ingredientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/ingredientes.html.twig #}
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}Lista de Ingredientes{% endblock %}

{% block body %}
    {% for ingrediente in ingredientes %}
        <article class=\"receta\">
            <header>
                <h2>{{ ingrediente.nombre }}</h2>
            </header>
    {% endfor %}
{% endblock %}
", "CookerCookingBundle:Cook:ingredientes.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/ingredientes.html.twig");
    }
}

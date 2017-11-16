<?php

/* CookerCookingBundle:Cook:ingredientes.html.twig */
class __TwigTemplate_b0717fd3e906261c999694aaf6645ba7033b19ef633b96747b6238beebdba0e2 extends Twig_Template
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
        $__internal_a7ece0972e722a2846aaaafd765528e455dce9ca7de0c55fce10bf9e400bade6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ece0972e722a2846aaaafd765528e455dce9ca7de0c55fce10bf9e400bade6->enter($__internal_a7ece0972e722a2846aaaafd765528e455dce9ca7de0c55fce10bf9e400bade6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7ece0972e722a2846aaaafd765528e455dce9ca7de0c55fce10bf9e400bade6->leave($__internal_a7ece0972e722a2846aaaafd765528e455dce9ca7de0c55fce10bf9e400bade6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d38af4da02b090853a4d983027a265647529eb8b0fca2f09862ba4ae6099f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d38af4da02b090853a4d983027a265647529eb8b0fca2f09862ba4ae6099f5f->enter($__internal_6d38af4da02b090853a4d983027a265647529eb8b0fca2f09862ba4ae6099f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_6d38af4da02b090853a4d983027a265647529eb8b0fca2f09862ba4ae6099f5f->leave($__internal_6d38af4da02b090853a4d983027a265647529eb8b0fca2f09862ba4ae6099f5f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0d4031ddb351233e0cd6251142e2c1852be3ae846eb0d5e6060abecb94747f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d4031ddb351233e0cd6251142e2c1852be3ae846eb0d5e6060abecb94747f4->enter($__internal_e0d4031ddb351233e0cd6251142e2c1852be3ae846eb0d5e6060abecb94747f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e0d4031ddb351233e0cd6251142e2c1852be3ae846eb0d5e6060abecb94747f4->leave($__internal_e0d4031ddb351233e0cd6251142e2c1852be3ae846eb0d5e6060abecb94747f4_prof);

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
", "CookerCookingBundle:Cook:ingredientes.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\ingredientes.html.twig");
    }
}

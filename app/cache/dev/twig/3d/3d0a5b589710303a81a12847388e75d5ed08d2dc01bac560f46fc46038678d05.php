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
        $__internal_adb2b012c61de80f90d51b6923fdf875d8d6e3a40406a4f2dfece017bf1df0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb2b012c61de80f90d51b6923fdf875d8d6e3a40406a4f2dfece017bf1df0e1->enter($__internal_adb2b012c61de80f90d51b6923fdf875d8d6e3a40406a4f2dfece017bf1df0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adb2b012c61de80f90d51b6923fdf875d8d6e3a40406a4f2dfece017bf1df0e1->leave($__internal_adb2b012c61de80f90d51b6923fdf875d8d6e3a40406a4f2dfece017bf1df0e1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_60477ac5c6b8646536610bea695ec52eae221750df9caadf902b3060fa199aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60477ac5c6b8646536610bea695ec52eae221750df9caadf902b3060fa199aa8->enter($__internal_60477ac5c6b8646536610bea695ec52eae221750df9caadf902b3060fa199aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_60477ac5c6b8646536610bea695ec52eae221750df9caadf902b3060fa199aa8->leave($__internal_60477ac5c6b8646536610bea695ec52eae221750df9caadf902b3060fa199aa8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb8a36e0ec85285c810b5e4ab2c49f0b1ac7922e5b0331531fec46d5cacebba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8a36e0ec85285c810b5e4ab2c49f0b1ac7922e5b0331531fec46d5cacebba6->enter($__internal_cb8a36e0ec85285c810b5e4ab2c49f0b1ac7922e5b0331531fec46d5cacebba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cb8a36e0ec85285c810b5e4ab2c49f0b1ac7922e5b0331531fec46d5cacebba6->leave($__internal_cb8a36e0ec85285c810b5e4ab2c49f0b1ac7922e5b0331531fec46d5cacebba6_prof);

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

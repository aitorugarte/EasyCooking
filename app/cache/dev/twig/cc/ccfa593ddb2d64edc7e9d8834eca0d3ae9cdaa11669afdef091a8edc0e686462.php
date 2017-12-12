<?php

/* @CookerCooking/Comment/create.html.twig */
class __TwigTemplate_8ea6d4b4aac7f8630790d3ad3e74a0dafa0852c9bc21d7db2ac9126715d43cff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Comment/create.html.twig", 3);
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
        $__internal_386428f7aeeb52965cd46e369d9eb48165f34211fe166cc4cd760f477af4a4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386428f7aeeb52965cd46e369d9eb48165f34211fe166cc4cd760f477af4a4b7->enter($__internal_386428f7aeeb52965cd46e369d9eb48165f34211fe166cc4cd760f477af4a4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Comment/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_386428f7aeeb52965cd46e369d9eb48165f34211fe166cc4cd760f477af4a4b7->leave($__internal_386428f7aeeb52965cd46e369d9eb48165f34211fe166cc4cd760f477af4a4b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b39c64d430210424c6d7401d8223a6b5a88cffb0251e51ab2529d82527a6dc72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39c64d430210424c6d7401d8223a6b5a88cffb0251e51ab2529d82527a6dc72->enter($__internal_b39c64d430210424c6d7401d8223a6b5a88cffb0251e51ab2529d82527a6dc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_b39c64d430210424c6d7401d8223a6b5a88cffb0251e51ab2529d82527a6dc72->leave($__internal_b39c64d430210424c6d7401d8223a6b5a88cffb0251e51ab2529d82527a6dc72_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5a101aafac430b7eb7655f8a33e29beb364864d40ae6818f9aac8d4a8b7a4cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a101aafac430b7eb7655f8a33e29beb364864d40ae6818f9aac8d4a8b7a4cb->enter($__internal_e5a101aafac430b7eb7655f8a33e29beb364864d40ae6818f9aac8d4a8b7a4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario a la receta \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comentario"] ?? $this->getContext($context, "comentario")), "receta", array()), "nombre", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CookerCookingBundle:Comment:form.html.twig", "@CookerCooking/Comment/create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_e5a101aafac430b7eb7655f8a33e29beb364864d40ae6818f9aac8d4a8b7a4cb->leave($__internal_e5a101aafac430b7eb7655f8a33e29beb364864d40ae6818f9aac8d4a8b7a4cb_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Comment/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  53 => 8,  47 => 7,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Comentario/create.html.twig #}

{% extends 'CookerCookingBundle::layout.html.twig' %}

{% block title %}Añadir comentario{% endblock%}

{% block body %}
    <h1>Añadir un comentario a la receta \"{{ comentario.receta.nombre }}\"</h1>
    {% include 'CookerCookingBundle:Comment:form.html.twig' with { 'form': form } %}
{% endblock %}
", "@CookerCooking/Comment/create.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Comment\\create.html.twig");
    }
}

<?php

/* CookerCookingBundle:Comment:create.html.twig */
class __TwigTemplate_a8c21d0ffdbddaa4974ea3fed7bb234bea7da056d9746085c289e8fe9726c110 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Comment:create.html.twig", 3);
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
        $__internal_d89142e1b189bf9b729613e209002a901a3cd5cecb1e7249c88b6949bd491758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89142e1b189bf9b729613e209002a901a3cd5cecb1e7249c88b6949bd491758->enter($__internal_d89142e1b189bf9b729613e209002a901a3cd5cecb1e7249c88b6949bd491758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d89142e1b189bf9b729613e209002a901a3cd5cecb1e7249c88b6949bd491758->leave($__internal_d89142e1b189bf9b729613e209002a901a3cd5cecb1e7249c88b6949bd491758_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_05134c40a17d43db4f85399c27d3e196577f3de43da3e2703e6e6de6a117bb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05134c40a17d43db4f85399c27d3e196577f3de43da3e2703e6e6de6a117bb64->enter($__internal_05134c40a17d43db4f85399c27d3e196577f3de43da3e2703e6e6de6a117bb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_05134c40a17d43db4f85399c27d3e196577f3de43da3e2703e6e6de6a117bb64->leave($__internal_05134c40a17d43db4f85399c27d3e196577f3de43da3e2703e6e6de6a117bb64_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5abe5867722a9385447529a196ced2fc1fba6e8d3ce0ba0b41c3ec896c991ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5abe5867722a9385447529a196ced2fc1fba6e8d3ce0ba0b41c3ec896c991ca6->enter($__internal_5abe5867722a9385447529a196ced2fc1fba6e8d3ce0ba0b41c3ec896c991ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario a la receta \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comentario"] ?? $this->getContext($context, "comentario")), "receta", array()), "nombre", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CookerCookingBundle:Comentario:form.html.twig", "CookerCookingBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_5abe5867722a9385447529a196ced2fc1fba6e8d3ce0ba0b41c3ec896c991ca6->leave($__internal_5abe5867722a9385447529a196ced2fc1fba6e8d3ce0ba0b41c3ec896c991ca6_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Comment:create.html.twig";
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
    {% include 'CookerCookingBundle:Comentario:form.html.twig' with { 'form': form } %}
{% endblock %}
", "CookerCookingBundle:Comment:create.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Comment/create.html.twig");
    }
}

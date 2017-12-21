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
        $__internal_e500e2da6e4a7755fa52726f0a9929f2301f8520a5f4727296f762b4d6d1c167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e500e2da6e4a7755fa52726f0a9929f2301f8520a5f4727296f762b4d6d1c167->enter($__internal_e500e2da6e4a7755fa52726f0a9929f2301f8520a5f4727296f762b4d6d1c167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Comment/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e500e2da6e4a7755fa52726f0a9929f2301f8520a5f4727296f762b4d6d1c167->leave($__internal_e500e2da6e4a7755fa52726f0a9929f2301f8520a5f4727296f762b4d6d1c167_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b923c148ff12265eed67ebd22da0d46b1d4e6d304f68a6c49fc68be7fd01779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b923c148ff12265eed67ebd22da0d46b1d4e6d304f68a6c49fc68be7fd01779->enter($__internal_7b923c148ff12265eed67ebd22da0d46b1d4e6d304f68a6c49fc68be7fd01779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_7b923c148ff12265eed67ebd22da0d46b1d4e6d304f68a6c49fc68be7fd01779->leave($__internal_7b923c148ff12265eed67ebd22da0d46b1d4e6d304f68a6c49fc68be7fd01779_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_df3a6da7e42b78b7b535f82a648e1bc0c38403242fb2dcdbf31c848aa06149b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df3a6da7e42b78b7b535f82a648e1bc0c38403242fb2dcdbf31c848aa06149b6->enter($__internal_df3a6da7e42b78b7b535f82a648e1bc0c38403242fb2dcdbf31c848aa06149b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario a la receta \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comentario"] ?? $this->getContext($context, "comentario")), "receta", array()), "nombre", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CookerCookingBundle:Comment:form.html.twig", "@CookerCooking/Comment/create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_df3a6da7e42b78b7b535f82a648e1bc0c38403242fb2dcdbf31c848aa06149b6->leave($__internal_df3a6da7e42b78b7b535f82a648e1bc0c38403242fb2dcdbf31c848aa06149b6_prof);

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

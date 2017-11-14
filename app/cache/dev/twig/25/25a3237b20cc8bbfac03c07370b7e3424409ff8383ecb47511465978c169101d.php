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
        $__internal_c03f782e698cc4c7d8d8aeae9aafef18491538e20682c91a0671f06f4d285f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03f782e698cc4c7d8d8aeae9aafef18491538e20682c91a0671f06f4d285f87->enter($__internal_c03f782e698cc4c7d8d8aeae9aafef18491538e20682c91a0671f06f4d285f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c03f782e698cc4c7d8d8aeae9aafef18491538e20682c91a0671f06f4d285f87->leave($__internal_c03f782e698cc4c7d8d8aeae9aafef18491538e20682c91a0671f06f4d285f87_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_42b849e868878a5960d09a6ecc690e6a717682bda928300a567a0428d823c435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b849e868878a5960d09a6ecc690e6a717682bda928300a567a0428d823c435->enter($__internal_42b849e868878a5960d09a6ecc690e6a717682bda928300a567a0428d823c435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_42b849e868878a5960d09a6ecc690e6a717682bda928300a567a0428d823c435->leave($__internal_42b849e868878a5960d09a6ecc690e6a717682bda928300a567a0428d823c435_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6eff660b81228c88dd60917750c249cce6e864e59858e844c60283ef0522a443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eff660b81228c88dd60917750c249cce6e864e59858e844c60283ef0522a443->enter($__internal_6eff660b81228c88dd60917750c249cce6e864e59858e844c60283ef0522a443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario a la receta \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "receta", array()), "nombre", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CookerCookingBundle:Comment:form.html.twig", "CookerCookingBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_6eff660b81228c88dd60917750c249cce6e864e59858e844c60283ef0522a443->leave($__internal_6eff660b81228c88dd60917750c249cce6e864e59858e844c60283ef0522a443_prof);

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
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Comment/create.html.twig #}

{% extends 'CookerCookingBundle::layout.html.twig' %}

{% block title %}Añadir comentario{% endblock%}

{% block body %}
    <h1>Añadir un comentario a la receta \"{{ comment.receta.nombre }}\"</h1>
    {% include 'CookerCookingBundle:Comment:form.html.twig' with { 'form': form } %}
{% endblock %}
", "CookerCookingBundle:Comment:create.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Comment/create.html.twig");
    }
}

<?php

/* CookerCookingBundle:Comment:create.html.twig */
class __TwigTemplate_751ee102fbda80854c84812decada2f83f8a3102bfe0cfb249a6712f63aed375 extends Twig_Template
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
        $__internal_b6b11ab55292b0d92280aa15c285fb6d17771d6effa9ec9523838bb96059e961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b11ab55292b0d92280aa15c285fb6d17771d6effa9ec9523838bb96059e961->enter($__internal_b6b11ab55292b0d92280aa15c285fb6d17771d6effa9ec9523838bb96059e961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6b11ab55292b0d92280aa15c285fb6d17771d6effa9ec9523838bb96059e961->leave($__internal_b6b11ab55292b0d92280aa15c285fb6d17771d6effa9ec9523838bb96059e961_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0e722690149dc6149633e60a45e340fb8de40b9b17ece78af6a96780c0e4e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e722690149dc6149633e60a45e340fb8de40b9b17ece78af6a96780c0e4e3b->enter($__internal_f0e722690149dc6149633e60a45e340fb8de40b9b17ece78af6a96780c0e4e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_f0e722690149dc6149633e60a45e340fb8de40b9b17ece78af6a96780c0e4e3b->leave($__internal_f0e722690149dc6149633e60a45e340fb8de40b9b17ece78af6a96780c0e4e3b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_939b085ec5714fe010bd871d470b32135f7fc6418165709eb4e8cbfb446b170e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939b085ec5714fe010bd871d470b32135f7fc6418165709eb4e8cbfb446b170e->enter($__internal_939b085ec5714fe010bd871d470b32135f7fc6418165709eb4e8cbfb446b170e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario a la receta \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comentario"] ?? $this->getContext($context, "comentario")), "receta", array()), "nombre", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CookerCookingBundle:Comment:form.html.twig", "CookerCookingBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_939b085ec5714fe010bd871d470b32135f7fc6418165709eb4e8cbfb446b170e->leave($__internal_939b085ec5714fe010bd871d470b32135f7fc6418165709eb4e8cbfb446b170e_prof);

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
    {% include 'CookerCookingBundle:Comment:form.html.twig' with { 'form': form } %}
{% endblock %}
", "CookerCookingBundle:Comment:create.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Comment/create.html.twig");
    }
}

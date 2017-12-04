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
        $__internal_4c09ddbcdd5c9505429e1bf2eb2e902e0884ad3c8e185308e8e41f93f4c6521c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c09ddbcdd5c9505429e1bf2eb2e902e0884ad3c8e185308e8e41f93f4c6521c->enter($__internal_4c09ddbcdd5c9505429e1bf2eb2e902e0884ad3c8e185308e8e41f93f4c6521c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c09ddbcdd5c9505429e1bf2eb2e902e0884ad3c8e185308e8e41f93f4c6521c->leave($__internal_4c09ddbcdd5c9505429e1bf2eb2e902e0884ad3c8e185308e8e41f93f4c6521c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fc340b81d3e92e6d61d197485fbf20484d1bf22d7d5ac94aa143a62c2532ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc340b81d3e92e6d61d197485fbf20484d1bf22d7d5ac94aa143a62c2532ada->enter($__internal_5fc340b81d3e92e6d61d197485fbf20484d1bf22d7d5ac94aa143a62c2532ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_5fc340b81d3e92e6d61d197485fbf20484d1bf22d7d5ac94aa143a62c2532ada->leave($__internal_5fc340b81d3e92e6d61d197485fbf20484d1bf22d7d5ac94aa143a62c2532ada_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7aaf3441ab0e608d28f72f894d45c96972365993f52d0f7547a24beb219fa341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aaf3441ab0e608d28f72f894d45c96972365993f52d0f7547a24beb219fa341->enter($__internal_7aaf3441ab0e608d28f72f894d45c96972365993f52d0f7547a24beb219fa341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario a la receta \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comentario"] ?? $this->getContext($context, "comentario")), "receta", array()), "nombre", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CookerCookingBundle:Comment:form.html.twig", "CookerCookingBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_7aaf3441ab0e608d28f72f894d45c96972365993f52d0f7547a24beb219fa341->leave($__internal_7aaf3441ab0e608d28f72f894d45c96972365993f52d0f7547a24beb219fa341_prof);

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

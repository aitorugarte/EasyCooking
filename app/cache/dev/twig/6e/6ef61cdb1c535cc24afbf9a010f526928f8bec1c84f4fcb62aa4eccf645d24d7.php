<?php

/* @CookerCooking/Comment/create.html.twig */
class __TwigTemplate_37159a35271715b863ce0b1b7697e29804b30086cfeb6d3d853b804bf56a6800 extends Twig_Template
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
        $__internal_4a6eba0f646a0c9f370b33392cc974ed2f488f5b2b5ea640d9f668aafd52277b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a6eba0f646a0c9f370b33392cc974ed2f488f5b2b5ea640d9f668aafd52277b->enter($__internal_4a6eba0f646a0c9f370b33392cc974ed2f488f5b2b5ea640d9f668aafd52277b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Comment/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a6eba0f646a0c9f370b33392cc974ed2f488f5b2b5ea640d9f668aafd52277b->leave($__internal_4a6eba0f646a0c9f370b33392cc974ed2f488f5b2b5ea640d9f668aafd52277b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d850acfd3cbb10bb2e3f08be093f8f992af364a9d3e725ea4ca2917a35e999ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d850acfd3cbb10bb2e3f08be093f8f992af364a9d3e725ea4ca2917a35e999ef->enter($__internal_d850acfd3cbb10bb2e3f08be093f8f992af364a9d3e725ea4ca2917a35e999ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_d850acfd3cbb10bb2e3f08be093f8f992af364a9d3e725ea4ca2917a35e999ef->leave($__internal_d850acfd3cbb10bb2e3f08be093f8f992af364a9d3e725ea4ca2917a35e999ef_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1210af5dd010ee263805a3c41c4241d685a8b4f8bce9eb0f41a09f4f740adab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1210af5dd010ee263805a3c41c4241d685a8b4f8bce9eb0f41a09f4f740adab->enter($__internal_b1210af5dd010ee263805a3c41c4241d685a8b4f8bce9eb0f41a09f4f740adab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario a la receta \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "receta", array()), "nombre", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CookerCookingBundle:Comment:form.html.twig", "@CookerCooking/Comment/create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_b1210af5dd010ee263805a3c41c4241d685a8b4f8bce9eb0f41a09f4f740adab->leave($__internal_b1210af5dd010ee263805a3c41c4241d685a8b4f8bce9eb0f41a09f4f740adab_prof);

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
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Comment/create.html.twig #}

{% extends 'CookerCookingBundle::layout.html.twig' %}

{% block title %}Añadir comentario{% endblock%}

{% block body %}
    <h1>Añadir un comentario a la receta \"{{ comment.receta.nombre }}\"</h1>
    {% include 'CookerCookingBundle:Comment:form.html.twig' with { 'form': form } %}
{% endblock %}
", "@CookerCooking/Comment/create.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Comment\\create.html.twig");
    }
}

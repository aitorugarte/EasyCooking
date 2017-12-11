<?php

/* @CookerCooking/Cook/ingredientes.html.twig */
class __TwigTemplate_909648956fcadc22a666d7f9acdad16a1f71865b60e9dcf26e45b43ef232fdc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Cook/ingredientes.html.twig", 2);
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
        $__internal_19a45504a963b2f388c0be80c7af184795c04dba9c516d179c28c812766eb788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a45504a963b2f388c0be80c7af184795c04dba9c516d179c28c812766eb788->enter($__internal_19a45504a963b2f388c0be80c7af184795c04dba9c516d179c28c812766eb788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19a45504a963b2f388c0be80c7af184795c04dba9c516d179c28c812766eb788->leave($__internal_19a45504a963b2f388c0be80c7af184795c04dba9c516d179c28c812766eb788_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5aae938151dbb9962669a141490b811db44a7b6be1eaa54238a0141e2b4b6a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aae938151dbb9962669a141490b811db44a7b6be1eaa54238a0141e2b4b6a0a->enter($__internal_5aae938151dbb9962669a141490b811db44a7b6be1eaa54238a0141e2b4b6a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_5aae938151dbb9962669a141490b811db44a7b6be1eaa54238a0141e2b4b6a0a->leave($__internal_5aae938151dbb9962669a141490b811db44a7b6be1eaa54238a0141e2b4b6a0a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5000cb48a6582c2b04f6e3f91f4ca5b6641018cde6d751a9ac06d808b7efcd99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5000cb48a6582c2b04f6e3f91f4ca5b6641018cde6d751a9ac06d808b7efcd99->enter($__internal_5000cb48a6582c2b04f6e3f91f4ca5b6641018cde6d751a9ac06d808b7efcd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<ul class=\"lista2\">
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredientes"] ?? $this->getContext($context, "ingredientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingrediente"]) {
            // line 8
            echo "\t<li class=\"elemento2\">
\t\t<h4><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showIngr", array("id" => $this->getAttribute($context["ingrediente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "nombre", array()), "html", null, true);
            echo "</a></h4>
\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingrediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t";
        
        $__internal_5000cb48a6582c2b04f6e3f91f4ca5b6641018cde6d751a9ac06d808b7efcd99->leave($__internal_5000cb48a6582c2b04f6e3f91f4ca5b6641018cde6d751a9ac06d808b7efcd99_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Cook/ingredientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  63 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
<ul class=\"lista2\">
\t{% for ingrediente in ingredientes %}
\t<li class=\"elemento2\">
\t\t<h4><a href=\"{{ path('cooker_cook_showIngr', { 'id': ingrediente.id }) }}\">{{ ingrediente.nombre }}</a></h4>
\t</li>
\t{% endfor %}
\t{% endblock %}
", "@CookerCooking/Cook/ingredientes.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\ingredientes.html.twig");
    }
}

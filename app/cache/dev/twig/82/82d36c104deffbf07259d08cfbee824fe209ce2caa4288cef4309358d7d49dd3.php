<?php

/* @CookerCooking/Cook/ingredientes.html.twig */
class __TwigTemplate_909648956fcadc22a666d7f9acdad16a1f71865b60e9dcf26e45b43ef232fdc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::sidebar.html.twig", "@CookerCooking/Cook/ingredientes.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CookerCookingBundle::sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88c2b10e8dbdae9cc28780065682a4bbce72e17856624cb66104f8e07fa5a647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c2b10e8dbdae9cc28780065682a4bbce72e17856624cb66104f8e07fa5a647->enter($__internal_88c2b10e8dbdae9cc28780065682a4bbce72e17856624cb66104f8e07fa5a647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88c2b10e8dbdae9cc28780065682a4bbce72e17856624cb66104f8e07fa5a647->leave($__internal_88c2b10e8dbdae9cc28780065682a4bbce72e17856624cb66104f8e07fa5a647_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab06c2a795f769746ac3b10230d8d92a37363d7e2bbe50b6aed5207cc62ce41c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab06c2a795f769746ac3b10230d8d92a37363d7e2bbe50b6aed5207cc62ce41c->enter($__internal_ab06c2a795f769746ac3b10230d8d92a37363d7e2bbe50b6aed5207cc62ce41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_ab06c2a795f769746ac3b10230d8d92a37363d7e2bbe50b6aed5207cc62ce41c->leave($__internal_ab06c2a795f769746ac3b10230d8d92a37363d7e2bbe50b6aed5207cc62ce41c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a9adc7246e97a8f06064be431957afe5d020cf4f0df87af6a8a5aac04b7b2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9adc7246e97a8f06064be431957afe5d020cf4f0df87af6a8a5aac04b7b2e0->enter($__internal_7a9adc7246e97a8f06064be431957afe5d020cf4f0df87af6a8a5aac04b7b2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<ul class=\"lista2\">
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredientes"] ?? $this->getContext($context, "ingredientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingrediente"]) {
            // line 9
            echo "\t<li class=\"elemento2\">
\t\t<h4><a href=\"";
            // line 10
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
        // line 13
        echo "\t";
        
        $__internal_7a9adc7246e97a8f06064be431957afe5d020cf4f0df87af6a8a5aac04b7b2e0->leave($__internal_7a9adc7246e97a8f06064be431957afe5d020cf4f0df87af6a8a5aac04b7b2e0_prof);

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
        return array (  75 => 13,  64 => 10,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
{% extends 'CookerCookingBundle::sidebar.html.twig' %}
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

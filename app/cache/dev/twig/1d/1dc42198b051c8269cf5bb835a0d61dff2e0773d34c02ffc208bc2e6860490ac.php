<?php

/* CookerCookingBundle:Cook:showIngr.html.twig */
class __TwigTemplate_3cd37086422a646ef62a6b3d155821f3e78ae886aee2c0c84090d07418244ad1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:showIngr.html.twig", 2);
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
        $__internal_4d3990ef8f7b5c70a8a1c55eb978af585e8c77ca965432f1738bd0bfcea5d27e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3990ef8f7b5c70a8a1c55eb978af585e8c77ca965432f1738bd0bfcea5d27e->enter($__internal_4d3990ef8f7b5c70a8a1c55eb978af585e8c77ca965432f1738bd0bfcea5d27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:showIngr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d3990ef8f7b5c70a8a1c55eb978af585e8c77ca965432f1738bd0bfcea5d27e->leave($__internal_4d3990ef8f7b5c70a8a1c55eb978af585e8c77ca965432f1738bd0bfcea5d27e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5d3ab19636ef91d146f8096033fec8ba6c9a41922d12fac5dcbfe6875bdf9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d3ab19636ef91d146f8096033fec8ba6c9a41922d12fac5dcbfe6875bdf9d2->enter($__internal_c5d3ab19636ef91d146f8096033fec8ba6c9a41922d12fac5dcbfe6875bdf9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Detalles de la receta";
        
        $__internal_c5d3ab19636ef91d146f8096033fec8ba6c9a41922d12fac5dcbfe6875bdf9d2->leave($__internal_c5d3ab19636ef91d146f8096033fec8ba6c9a41922d12fac5dcbfe6875bdf9d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a27d85465b9af7a1668bd4b3ac729bf6b7cf95f415c2b1855ea3cb0c3d9854da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27d85465b9af7a1668bd4b3ac729bf6b7cf95f415c2b1855ea3cb0c3d9854da->enter($__internal_a27d85465b9af7a1668bd4b3ac729bf6b7cf95f415c2b1855ea3cb0c3d9854da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>Recetas para el ingrediente: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingrediente"] ?? $this->getContext($context, "ingrediente")), "nombre", array()), "html", null, true);
        echo "</h1>
\t
\t<ul>
\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["recetas"]);
        foreach ($context['_seq'] as $context["_key"] => $context["recetas"]) {
            // line 10
            echo "\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "nombre", array()), "html", null, true);
            echo "</li>
\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recetas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "

";
        
        $__internal_a27d85465b9af7a1668bd4b3ac729bf6b7cf95f415c2b1855ea3cb0c3d9854da->leave($__internal_a27d85465b9af7a1668bd4b3ac729bf6b7cf95f415c2b1855ea3cb0c3d9854da_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:showIngr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  64 => 10,  60 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/showIngr.html.twig #}
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}Detalles de la receta{% endblock %}

{% block body %}
\t<h1>Recetas para el ingrediente: {{ ingrediente.nombre }}</h1>
\t
\t<ul>
\t{% for recetas in recetas %}
\t<li>{{ receta.nombre }}</li>
\t {% endfor %}


{% endblock %}
", "CookerCookingBundle:Cook:showIngr.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/showIngr.html.twig");
    }
}

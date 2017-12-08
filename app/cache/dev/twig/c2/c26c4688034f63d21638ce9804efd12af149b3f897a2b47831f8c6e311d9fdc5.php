<?php

/* @CookerCooking/Cook/showIngr.html.twig */
class __TwigTemplate_dd9834fa9f7d631f5d7ffaf29b35c8f1e39465ef28ee8b29ae6a58d939c6e475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Cook/showIngr.html.twig", 2);
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
        $__internal_240f4bf8dc91b79f42136c3bf6c112c2164e509569938ab6af3a09b30c28b24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240f4bf8dc91b79f42136c3bf6c112c2164e509569938ab6af3a09b30c28b24b->enter($__internal_240f4bf8dc91b79f42136c3bf6c112c2164e509569938ab6af3a09b30c28b24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/showIngr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_240f4bf8dc91b79f42136c3bf6c112c2164e509569938ab6af3a09b30c28b24b->leave($__internal_240f4bf8dc91b79f42136c3bf6c112c2164e509569938ab6af3a09b30c28b24b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d97f07c325940b7c4af84c68ff330fd756b1cee88ff46d06262d730206121380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97f07c325940b7c4af84c68ff330fd756b1cee88ff46d06262d730206121380->enter($__internal_d97f07c325940b7c4af84c68ff330fd756b1cee88ff46d06262d730206121380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingrediente"] ?? $this->getContext($context, "ingrediente")), "nombre", array()), "html", null, true);
        
        $__internal_d97f07c325940b7c4af84c68ff330fd756b1cee88ff46d06262d730206121380->leave($__internal_d97f07c325940b7c4af84c68ff330fd756b1cee88ff46d06262d730206121380_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d180e5e59ab755f1ab42796699e4c8a65e4eaeb0f2d45548b29adfba7944f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d180e5e59ab755f1ab42796699e4c8a65e4eaeb0f2d45548b29adfba7944f05->enter($__internal_3d180e5e59ab755f1ab42796699e4c8a65e4eaeb0f2d45548b29adfba7944f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>Recetas para el ingrediente: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingrediente"] ?? $this->getContext($context, "ingrediente")), "nombre", array()), "html", null, true);
        echo "</h1>
\t
\t<ul>
\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 10
            echo "\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</ul>

";
        
        $__internal_3d180e5e59ab755f1ab42796699e4c8a65e4eaeb0f2d45548b29adfba7944f05->leave($__internal_3d180e5e59ab755f1ab42796699e4c8a65e4eaeb0f2d45548b29adfba7944f05_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Cook/showIngr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  64 => 10,  60 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
{% block title %}{{ ingrediente.nombre }}{% endblock %}

{% block body %}
\t<h1>Recetas para el ingrediente: {{ ingrediente.nombre }}</h1>
\t
\t<ul>
\t{% for receta in recetas %}
\t<li><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></li>
\t{% endfor %}
\t</ul>

{% endblock %}
", "@CookerCooking/Cook/showIngr.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\showIngr.html.twig");
    }
}

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
        $__internal_72b1c9a82efed95f41f06acc4751b4fbd3f9c5572745308e56aae2d2862d9663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b1c9a82efed95f41f06acc4751b4fbd3f9c5572745308e56aae2d2862d9663->enter($__internal_72b1c9a82efed95f41f06acc4751b4fbd3f9c5572745308e56aae2d2862d9663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:showIngr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72b1c9a82efed95f41f06acc4751b4fbd3f9c5572745308e56aae2d2862d9663->leave($__internal_72b1c9a82efed95f41f06acc4751b4fbd3f9c5572745308e56aae2d2862d9663_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_09dc738335031af15f551e1b79b03e99d43f225e340e645a7425f6a26dc0f28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09dc738335031af15f551e1b79b03e99d43f225e340e645a7425f6a26dc0f28f->enter($__internal_09dc738335031af15f551e1b79b03e99d43f225e340e645a7425f6a26dc0f28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingrediente"] ?? $this->getContext($context, "ingrediente")), "nombre", array()), "html", null, true);
        
        $__internal_09dc738335031af15f551e1b79b03e99d43f225e340e645a7425f6a26dc0f28f->leave($__internal_09dc738335031af15f551e1b79b03e99d43f225e340e645a7425f6a26dc0f28f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7774dd28dfead01a1d8318f0cc777f4fe15621cf6102cf07a556cd92b099c95f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7774dd28dfead01a1d8318f0cc777f4fe15621cf6102cf07a556cd92b099c95f->enter($__internal_7774dd28dfead01a1d8318f0cc777f4fe15621cf6102cf07a556cd92b099c95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "

";
        
        $__internal_7774dd28dfead01a1d8318f0cc777f4fe15621cf6102cf07a556cd92b099c95f->leave($__internal_7774dd28dfead01a1d8318f0cc777f4fe15621cf6102cf07a556cd92b099c95f_prof);

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


{% endblock %}
", "CookerCookingBundle:Cook:showIngr.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/showIngr.html.twig");
    }
}

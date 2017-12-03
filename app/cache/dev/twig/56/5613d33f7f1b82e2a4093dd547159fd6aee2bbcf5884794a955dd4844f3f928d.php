<?php

/* CookerCookingBundle:Cook:showPlato.html.twig */
class __TwigTemplate_bbf3b1e7763f7db8da94cdf5579e2e4214c17a3065c2ad9f71e9259d823ca1db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:showPlato.html.twig", 2);
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
        $__internal_f82e5445c5c506f667a69fe36cd984ade5e2f40bf7d1c85a6edbef3542bf8320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82e5445c5c506f667a69fe36cd984ade5e2f40bf7d1c85a6edbef3542bf8320->enter($__internal_f82e5445c5c506f667a69fe36cd984ade5e2f40bf7d1c85a6edbef3542bf8320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:showPlato.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f82e5445c5c506f667a69fe36cd984ade5e2f40bf7d1c85a6edbef3542bf8320->leave($__internal_f82e5445c5c506f667a69fe36cd984ade5e2f40bf7d1c85a6edbef3542bf8320_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5ecffd46e6ef433bed5d65827ed5ea0e0b8b442854bc286b57781b54c929c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ecffd46e6ef433bed5d65827ed5ea0e0b8b442854bc286b57781b54c929c00->enter($__internal_f5ecffd46e6ef433bed5d65827ed5ea0e0b8b442854bc286b57781b54c929c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Error";
        
        $__internal_f5ecffd46e6ef433bed5d65827ed5ea0e0b8b442854bc286b57781b54c929c00->leave($__internal_f5ecffd46e6ef433bed5d65827ed5ea0e0b8b442854bc286b57781b54c929c00_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_926d1f5197345991eff3e67c8ff4dc4b504da13c29169a99b5e1d770d88f81f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926d1f5197345991eff3e67c8ff4dc4b504da13c29169a99b5e1d770d88f81f3->enter($__internal_926d1f5197345991eff3e67c8ff4dc4b504da13c29169a99b5e1d770d88f81f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h1>Recetas para el plato: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plato"] ?? $this->getContext($context, "plato")), "nombre", array()), "html", null, true);
        echo "</h1>
\t
\t<ul>
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 11
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
        // line 13
        echo "\t</ul>

";
        
        $__internal_926d1f5197345991eff3e67c8ff4dc4b504da13c29169a99b5e1d770d88f81f3->leave($__internal_926d1f5197345991eff3e67c8ff4dc4b504da13c29169a99b5e1d770d88f81f3_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:showPlato.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  66 => 11,  62 => 10,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/showPlato.html.twig #}
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}Error{% endblock %}

{% block body %}

<h1>Recetas para el plato: {{ plato.nombre }}</h1>
\t
\t<ul>
\t{% for receta in recetas %}
\t<li><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></li>
\t{% endfor %}
\t</ul>

{% endblock %}
", "CookerCookingBundle:Cook:showPlato.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/showPlato.html.twig");
    }
}

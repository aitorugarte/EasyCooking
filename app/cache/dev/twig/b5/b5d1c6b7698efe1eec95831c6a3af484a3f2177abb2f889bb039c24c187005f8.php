<?php

/* CookerCookingBundle:Cook:ingredientes.html.twig */
class __TwigTemplate_e2917715ca670f33803b1c957b0dabaef14edd61eaf644281a171c9a60e27ae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::sidebar.html.twig", "CookerCookingBundle:Cook:ingredientes.html.twig", 2);
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
        $__internal_ea12d4f90ad23a717c11c7b4c3c61ccf4911a6d2de2ec40ace44c5e2bea79afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea12d4f90ad23a717c11c7b4c3c61ccf4911a6d2de2ec40ace44c5e2bea79afc->enter($__internal_ea12d4f90ad23a717c11c7b4c3c61ccf4911a6d2de2ec40ace44c5e2bea79afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea12d4f90ad23a717c11c7b4c3c61ccf4911a6d2de2ec40ace44c5e2bea79afc->leave($__internal_ea12d4f90ad23a717c11c7b4c3c61ccf4911a6d2de2ec40ace44c5e2bea79afc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0309845830b01d9f26aa1bc28af58e6cda7d27f9e4f78335d382c3f8c3598578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0309845830b01d9f26aa1bc28af58e6cda7d27f9e4f78335d382c3f8c3598578->enter($__internal_0309845830b01d9f26aa1bc28af58e6cda7d27f9e4f78335d382c3f8c3598578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_0309845830b01d9f26aa1bc28af58e6cda7d27f9e4f78335d382c3f8c3598578->leave($__internal_0309845830b01d9f26aa1bc28af58e6cda7d27f9e4f78335d382c3f8c3598578_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1db28441b92f83f93399dfa7edd2697268d0bf3ec8e320536044b542fb2c9966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db28441b92f83f93399dfa7edd2697268d0bf3ec8e320536044b542fb2c9966->enter($__internal_1db28441b92f83f93399dfa7edd2697268d0bf3ec8e320536044b542fb2c9966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1db28441b92f83f93399dfa7edd2697268d0bf3ec8e320536044b542fb2c9966->leave($__internal_1db28441b92f83f93399dfa7edd2697268d0bf3ec8e320536044b542fb2c9966_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:ingredientes.html.twig";
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
", "CookerCookingBundle:Cook:ingredientes.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/ingredientes.html.twig");
    }
}

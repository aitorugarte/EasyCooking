<?php

/* CookerCookingBundle:Cook:ingredientes.html.twig */
class __TwigTemplate_fc1399cfe866550c0cdbfe1b405ec06435459d5f9725f45af650303ee469f4e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:ingredientes.html.twig", 2);
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
        $__internal_46f17927d444a37e2874646ed212cb3065d8e67b65eec903a3b0d5cc66209247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f17927d444a37e2874646ed212cb3065d8e67b65eec903a3b0d5cc66209247->enter($__internal_46f17927d444a37e2874646ed212cb3065d8e67b65eec903a3b0d5cc66209247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46f17927d444a37e2874646ed212cb3065d8e67b65eec903a3b0d5cc66209247->leave($__internal_46f17927d444a37e2874646ed212cb3065d8e67b65eec903a3b0d5cc66209247_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_81f4d8932515c07bce2608edd92079ecc1c5f8c54bba4ea4398e657841b97c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f4d8932515c07bce2608edd92079ecc1c5f8c54bba4ea4398e657841b97c57->enter($__internal_81f4d8932515c07bce2608edd92079ecc1c5f8c54bba4ea4398e657841b97c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_81f4d8932515c07bce2608edd92079ecc1c5f8c54bba4ea4398e657841b97c57->leave($__internal_81f4d8932515c07bce2608edd92079ecc1c5f8c54bba4ea4398e657841b97c57_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaf514ff25b9f2c648497add8f82bdf80708905cfd8cb05e79755b07d959d8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf514ff25b9f2c648497add8f82bdf80708905cfd8cb05e79755b07d959d8a6->enter($__internal_aaf514ff25b9f2c648497add8f82bdf80708905cfd8cb05e79755b07d959d8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aaf514ff25b9f2c648497add8f82bdf80708905cfd8cb05e79755b07d959d8a6->leave($__internal_aaf514ff25b9f2c648497add8f82bdf80708905cfd8cb05e79755b07d959d8a6_prof);

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
", "CookerCookingBundle:Cook:ingredientes.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/ingredientes.html.twig");
    }
}

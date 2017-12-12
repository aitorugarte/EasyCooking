<?php

/* CookerCookingBundle:Cook:ingredientes.html.twig */
class __TwigTemplate_94190beb97b54eb0e3070255f93f62588033e268b992b3b0840362d6f68731ad extends Twig_Template
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
        $__internal_f60d327a0acb02121115bd60d51c0263399b69bc590c8a8ddcbcf2a391496f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60d327a0acb02121115bd60d51c0263399b69bc590c8a8ddcbcf2a391496f9b->enter($__internal_f60d327a0acb02121115bd60d51c0263399b69bc590c8a8ddcbcf2a391496f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f60d327a0acb02121115bd60d51c0263399b69bc590c8a8ddcbcf2a391496f9b->leave($__internal_f60d327a0acb02121115bd60d51c0263399b69bc590c8a8ddcbcf2a391496f9b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_024089d84ad2d129f1c3b75d4ff9c26ce5a4734d08ecc8ec306589c8a946052c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024089d84ad2d129f1c3b75d4ff9c26ce5a4734d08ecc8ec306589c8a946052c->enter($__internal_024089d84ad2d129f1c3b75d4ff9c26ce5a4734d08ecc8ec306589c8a946052c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_024089d84ad2d129f1c3b75d4ff9c26ce5a4734d08ecc8ec306589c8a946052c->leave($__internal_024089d84ad2d129f1c3b75d4ff9c26ce5a4734d08ecc8ec306589c8a946052c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d39b24794a9796cad277a30183dcfcc0d8e3796bb66d723eb42d882610e23521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39b24794a9796cad277a30183dcfcc0d8e3796bb66d723eb42d882610e23521->enter($__internal_d39b24794a9796cad277a30183dcfcc0d8e3796bb66d723eb42d882610e23521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d39b24794a9796cad277a30183dcfcc0d8e3796bb66d723eb42d882610e23521->leave($__internal_d39b24794a9796cad277a30183dcfcc0d8e3796bb66d723eb42d882610e23521_prof);

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
", "CookerCookingBundle:Cook:ingredientes.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\ingredientes.html.twig");
    }
}

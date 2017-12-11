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
        $__internal_26db5f5a6eb18831d8c824812b0ceb54566a2190b9e9a0e0f561cc03851f0b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26db5f5a6eb18831d8c824812b0ceb54566a2190b9e9a0e0f561cc03851f0b28->enter($__internal_26db5f5a6eb18831d8c824812b0ceb54566a2190b9e9a0e0f561cc03851f0b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26db5f5a6eb18831d8c824812b0ceb54566a2190b9e9a0e0f561cc03851f0b28->leave($__internal_26db5f5a6eb18831d8c824812b0ceb54566a2190b9e9a0e0f561cc03851f0b28_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd00a7d72044d371fd55e8135309b783287e9b12d1ed2ca5e330475e60085ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd00a7d72044d371fd55e8135309b783287e9b12d1ed2ca5e330475e60085ff3->enter($__internal_fd00a7d72044d371fd55e8135309b783287e9b12d1ed2ca5e330475e60085ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_fd00a7d72044d371fd55e8135309b783287e9b12d1ed2ca5e330475e60085ff3->leave($__internal_fd00a7d72044d371fd55e8135309b783287e9b12d1ed2ca5e330475e60085ff3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d695194a03fa27610a0f4b1a5259ba7beb814f7735211a2dd31f16531c279424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d695194a03fa27610a0f4b1a5259ba7beb814f7735211a2dd31f16531c279424->enter($__internal_d695194a03fa27610a0f4b1a5259ba7beb814f7735211a2dd31f16531c279424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d695194a03fa27610a0f4b1a5259ba7beb814f7735211a2dd31f16531c279424->leave($__internal_d695194a03fa27610a0f4b1a5259ba7beb814f7735211a2dd31f16531c279424_prof);

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

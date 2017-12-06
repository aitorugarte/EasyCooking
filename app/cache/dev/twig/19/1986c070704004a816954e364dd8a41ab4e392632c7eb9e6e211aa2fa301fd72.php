<?php

/* @CookerCooking/Cook/ingredientes.html.twig */
class __TwigTemplate_a1f8e1a1608df86e73bbf0e77e04648aa234d9f7459a6b3dddaf69860031287a extends Twig_Template
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
        $__internal_19f597b47a30d9b042922a201e8e02b2e84fdc5fd6a646195d23ff7b3cda102b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f597b47a30d9b042922a201e8e02b2e84fdc5fd6a646195d23ff7b3cda102b->enter($__internal_19f597b47a30d9b042922a201e8e02b2e84fdc5fd6a646195d23ff7b3cda102b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19f597b47a30d9b042922a201e8e02b2e84fdc5fd6a646195d23ff7b3cda102b->leave($__internal_19f597b47a30d9b042922a201e8e02b2e84fdc5fd6a646195d23ff7b3cda102b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6bf99760b4ca16a1d721520c4a34d2ba3988b5779345c8833afb60a7ebc5afee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf99760b4ca16a1d721520c4a34d2ba3988b5779345c8833afb60a7ebc5afee->enter($__internal_6bf99760b4ca16a1d721520c4a34d2ba3988b5779345c8833afb60a7ebc5afee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_6bf99760b4ca16a1d721520c4a34d2ba3988b5779345c8833afb60a7ebc5afee->leave($__internal_6bf99760b4ca16a1d721520c4a34d2ba3988b5779345c8833afb60a7ebc5afee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca01117d58d45de2fa9810c5ad3e4921f22c55be35f5b985c2fa995538c96ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca01117d58d45de2fa9810c5ad3e4921f22c55be35f5b985c2fa995538c96ac4->enter($__internal_ca01117d58d45de2fa9810c5ad3e4921f22c55be35f5b985c2fa995538c96ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ca01117d58d45de2fa9810c5ad3e4921f22c55be35f5b985c2fa995538c96ac4->leave($__internal_ca01117d58d45de2fa9810c5ad3e4921f22c55be35f5b985c2fa995538c96ac4_prof);

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

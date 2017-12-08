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
        $__internal_4d4c52a29ffec50aa4e73c1c6e361a1bf66ce0c2ce2982d0d91a08be981d278b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4c52a29ffec50aa4e73c1c6e361a1bf66ce0c2ce2982d0d91a08be981d278b->enter($__internal_4d4c52a29ffec50aa4e73c1c6e361a1bf66ce0c2ce2982d0d91a08be981d278b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d4c52a29ffec50aa4e73c1c6e361a1bf66ce0c2ce2982d0d91a08be981d278b->leave($__internal_4d4c52a29ffec50aa4e73c1c6e361a1bf66ce0c2ce2982d0d91a08be981d278b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f57f74a81fb4d16a60a2fae9f4a0d2317c6e291fa0c30758eeee7a49f640762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f57f74a81fb4d16a60a2fae9f4a0d2317c6e291fa0c30758eeee7a49f640762->enter($__internal_9f57f74a81fb4d16a60a2fae9f4a0d2317c6e291fa0c30758eeee7a49f640762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_9f57f74a81fb4d16a60a2fae9f4a0d2317c6e291fa0c30758eeee7a49f640762->leave($__internal_9f57f74a81fb4d16a60a2fae9f4a0d2317c6e291fa0c30758eeee7a49f640762_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5008507ea059439e0690f8114427a3200d3e7376c4263f595c0f71f4fcdafe24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5008507ea059439e0690f8114427a3200d3e7376c4263f595c0f71f4fcdafe24->enter($__internal_5008507ea059439e0690f8114427a3200d3e7376c4263f595c0f71f4fcdafe24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5008507ea059439e0690f8114427a3200d3e7376c4263f595c0f71f4fcdafe24->leave($__internal_5008507ea059439e0690f8114427a3200d3e7376c4263f595c0f71f4fcdafe24_prof);

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

<?php

/* CookerCookingBundle:Cook:platos.html.twig */
class __TwigTemplate_1b2be09400b4a450003ae5d31d6afcd8667da1f5d581673b3752ee97cf05fa3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:platos.html.twig", 2);
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
        $__internal_b61a4a344f16df24f226e4eb71d8c703e29b0800dcd3c5a607dd3836b0357814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61a4a344f16df24f226e4eb71d8c703e29b0800dcd3c5a607dd3836b0357814->enter($__internal_b61a4a344f16df24f226e4eb71d8c703e29b0800dcd3c5a607dd3836b0357814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:platos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b61a4a344f16df24f226e4eb71d8c703e29b0800dcd3c5a607dd3836b0357814->leave($__internal_b61a4a344f16df24f226e4eb71d8c703e29b0800dcd3c5a607dd3836b0357814_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_031ded8a2a47675056029aa3434129b9641459b06aff4ea989c5321b54c2ec9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031ded8a2a47675056029aa3434129b9641459b06aff4ea989c5321b54c2ec9d->enter($__internal_031ded8a2a47675056029aa3434129b9641459b06aff4ea989c5321b54c2ec9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tipos";
        
        $__internal_031ded8a2a47675056029aa3434129b9641459b06aff4ea989c5321b54c2ec9d->leave($__internal_031ded8a2a47675056029aa3434129b9641459b06aff4ea989c5321b54c2ec9d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1760465638eebb6895c5e31de72e936147a4c5eabbe1acd2007a0f59813cd8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1760465638eebb6895c5e31de72e936147a4c5eabbe1acd2007a0f59813cd8e7->enter($__internal_1760465638eebb6895c5e31de72e936147a4c5eabbe1acd2007a0f59813cd8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t
\t
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["platos"] ?? $this->getContext($context, "platos")));
        foreach ($context['_seq'] as $context["_key"] => $context["plato"]) {
            // line 9
            echo "\t";
            $context["tipo"] = $this->getAttribute($context["plato"], "nombre", array());
            // line 10
            echo "
\t<h1>Recetas para el tipo: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["plato"], "nombre", array()), "html", null, true);
            echo "</h1>
\t<ul>
\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                if ((($context["tipo"] ?? $this->getContext($context, "tipo")) == $this->getAttribute($this->getAttribute($context["receta"], "tipo_plato", array()), "nombre", array()))) {
                    // line 14
                    echo "
\t<li><a href=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                    echo "</a></li>
\t
\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t</ul>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t

";
        
        $__internal_1760465638eebb6895c5e31de72e936147a4c5eabbe1acd2007a0f59813cd8e7->leave($__internal_1760465638eebb6895c5e31de72e936147a4c5eabbe1acd2007a0f59813cd8e7_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:platos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  92 => 18,  80 => 15,  77 => 14,  72 => 13,  67 => 11,  64 => 10,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/platos.html.twig #}
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}Tipos{% endblock %}

{% block body %}
\t
\t
\t{% for plato in platos %}
\t{% set tipo = plato.nombre %}

\t<h1>Recetas para el tipo: {{ plato.nombre }}</h1>
\t<ul>
\t{% for receta in recetas if tipo == receta.tipo_plato.nombre %}

\t<li><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></li>
\t
\t{% endfor %}
\t</ul>
\t{% endfor %}
\t

{% endblock %}
", "CookerCookingBundle:Cook:platos.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/platos.html.twig");
    }
}

<?php

/* @CookerCooking/Cook/show2.html.twig */
class __TwigTemplate_421ba3a9dd8c81e3dccf660410fec929baa8913d00cfeb0d4c8350f4030bf301 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Cook/show2.html.twig", 2);
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
        $__internal_d75edf204160671b04d43793e2e203803b7e8bcbda2a6ef218f47149bfb7dcab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75edf204160671b04d43793e2e203803b7e8bcbda2a6ef218f47149bfb7dcab->enter($__internal_d75edf204160671b04d43793e2e203803b7e8bcbda2a6ef218f47149bfb7dcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/show2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d75edf204160671b04d43793e2e203803b7e8bcbda2a6ef218f47149bfb7dcab->leave($__internal_d75edf204160671b04d43793e2e203803b7e8bcbda2a6ef218f47149bfb7dcab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b12f4b40336e1dacf28712a2b23806b60606b85096ea88798143db08089e4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b12f4b40336e1dacf28712a2b23806b60606b85096ea88798143db08089e4c6->enter($__internal_2b12f4b40336e1dacf28712a2b23806b60606b85096ea88798143db08089e4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingrediente"] ?? $this->getContext($context, "ingrediente")), "nombre", array()), "html", null, true);
        
        $__internal_2b12f4b40336e1dacf28712a2b23806b60606b85096ea88798143db08089e4c6->leave($__internal_2b12f4b40336e1dacf28712a2b23806b60606b85096ea88798143db08089e4c6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_626836f9f0754bdc8be1c9998525f18c57854b3fa73cdaa1c8655037a7479e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626836f9f0754bdc8be1c9998525f18c57854b3fa73cdaa1c8655037a7479e21->enter($__internal_626836f9f0754bdc8be1c9998525f18c57854b3fa73cdaa1c8655037a7479e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_show", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
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
        
        $__internal_626836f9f0754bdc8be1c9998525f18c57854b3fa73cdaa1c8655037a7479e21->leave($__internal_626836f9f0754bdc8be1c9998525f18c57854b3fa73cdaa1c8655037a7479e21_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Cook/show2.html.twig";
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
\t<li><a href=\"{{ path('cooker_cook_show', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></li>
\t{% endfor %}


{% endblock %}
", "@CookerCooking/Cook/show2.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\show2.html.twig");
    }
}

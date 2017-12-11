<?php

/* CookerCookingBundle:Cook:ingredientes.html.twig */
class __TwigTemplate_94190beb97b54eb0e3070255f93f62588033e268b992b3b0840362d6f68731ad extends Twig_Template
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
        $__internal_41fd784def2acf1864fafcc05973dc4fba31fcb767716fa643beca3aa738062a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41fd784def2acf1864fafcc05973dc4fba31fcb767716fa643beca3aa738062a->enter($__internal_41fd784def2acf1864fafcc05973dc4fba31fcb767716fa643beca3aa738062a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41fd784def2acf1864fafcc05973dc4fba31fcb767716fa643beca3aa738062a->leave($__internal_41fd784def2acf1864fafcc05973dc4fba31fcb767716fa643beca3aa738062a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c720e306ab565f391a943e90951ec09c6cf45fa2eb67a51574f28d1510584f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c720e306ab565f391a943e90951ec09c6cf45fa2eb67a51574f28d1510584f0->enter($__internal_0c720e306ab565f391a943e90951ec09c6cf45fa2eb67a51574f28d1510584f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_0c720e306ab565f391a943e90951ec09c6cf45fa2eb67a51574f28d1510584f0->leave($__internal_0c720e306ab565f391a943e90951ec09c6cf45fa2eb67a51574f28d1510584f0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f997547205fdf17d4cf6bb6a3478b0ce0be772b99c8c56d531375c5f9ad82c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f997547205fdf17d4cf6bb6a3478b0ce0be772b99c8c56d531375c5f9ad82c3d->enter($__internal_f997547205fdf17d4cf6bb6a3478b0ce0be772b99c8c56d531375c5f9ad82c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f997547205fdf17d4cf6bb6a3478b0ce0be772b99c8c56d531375c5f9ad82c3d->leave($__internal_f997547205fdf17d4cf6bb6a3478b0ce0be772b99c8c56d531375c5f9ad82c3d_prof);

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
", "CookerCookingBundle:Cook:ingredientes.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\ingredientes.html.twig");
    }
}

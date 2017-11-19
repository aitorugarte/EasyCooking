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
        $__internal_88d399ba87519911fad9f3d756fb50220e744772e8dad650233e6910e03e6e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d399ba87519911fad9f3d756fb50220e744772e8dad650233e6910e03e6e96->enter($__internal_88d399ba87519911fad9f3d756fb50220e744772e8dad650233e6910e03e6e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88d399ba87519911fad9f3d756fb50220e744772e8dad650233e6910e03e6e96->leave($__internal_88d399ba87519911fad9f3d756fb50220e744772e8dad650233e6910e03e6e96_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b0fb1e48ef409fe5eeb865af553e409b79226996a23f12b41e93e708004b419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0fb1e48ef409fe5eeb865af553e409b79226996a23f12b41e93e708004b419->enter($__internal_8b0fb1e48ef409fe5eeb865af553e409b79226996a23f12b41e93e708004b419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_8b0fb1e48ef409fe5eeb865af553e409b79226996a23f12b41e93e708004b419->leave($__internal_8b0fb1e48ef409fe5eeb865af553e409b79226996a23f12b41e93e708004b419_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a7ae8385cdef867f518662837f27ea2d6c09350ff6ad957413bf9351fbc180e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7ae8385cdef867f518662837f27ea2d6c09350ff6ad957413bf9351fbc180e->enter($__internal_1a7ae8385cdef867f518662837f27ea2d6c09350ff6ad957413bf9351fbc180e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<ul class=\"lista2\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredientes"] ?? $this->getContext($context, "ingredientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingrediente"]) {
            // line 8
            echo "      <li class=\"elemento2\">  
                <h4><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_show2", array("id" => $this->getAttribute($context["ingrediente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "nombre", array()), "html", null, true);
            echo "</a></h4>
\t </li>  
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingrediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1a7ae8385cdef867f518662837f27ea2d6c09350ff6ad957413bf9351fbc180e->leave($__internal_1a7ae8385cdef867f518662837f27ea2d6c09350ff6ad957413bf9351fbc180e_prof);

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
        return array (  63 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
    {% for ingrediente in ingredientes %}
      <li class=\"elemento2\">  
                <h4><a href=\"{{ path('cooker_cook_show2', { 'id': ingrediente.id }) }}\">{{ ingrediente.nombre }}</a></h4>
\t </li>  
    {% endfor %}
{% endblock %}
", "@CookerCooking/Cook/ingredientes.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\ingredientes.html.twig");
    }
}

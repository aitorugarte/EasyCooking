<?php

/* @CookerCooking/Comment/create.html.twig */
class __TwigTemplate_37159a35271715b863ce0b1b7697e29804b30086cfeb6d3d853b804bf56a6800 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Comment/create.html.twig", 3);
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
        $__internal_273cc80c088c224323cd55ad369ba6ed093b5e3aead02b49e597ba46e8af9964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273cc80c088c224323cd55ad369ba6ed093b5e3aead02b49e597ba46e8af9964->enter($__internal_273cc80c088c224323cd55ad369ba6ed093b5e3aead02b49e597ba46e8af9964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Comment/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_273cc80c088c224323cd55ad369ba6ed093b5e3aead02b49e597ba46e8af9964->leave($__internal_273cc80c088c224323cd55ad369ba6ed093b5e3aead02b49e597ba46e8af9964_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2dcfe57ea8d743fd2cddaaf59ecfd7c059ee979e73cbf7fed4d6328167a3868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2dcfe57ea8d743fd2cddaaf59ecfd7c059ee979e73cbf7fed4d6328167a3868->enter($__internal_a2dcfe57ea8d743fd2cddaaf59ecfd7c059ee979e73cbf7fed4d6328167a3868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_a2dcfe57ea8d743fd2cddaaf59ecfd7c059ee979e73cbf7fed4d6328167a3868->leave($__internal_a2dcfe57ea8d743fd2cddaaf59ecfd7c059ee979e73cbf7fed4d6328167a3868_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee0c76819832abd92b20e6e0f5e0ce477df3bedaf3d6c1ad24e6aede82c31559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0c76819832abd92b20e6e0f5e0ce477df3bedaf3d6c1ad24e6aede82c31559->enter($__internal_ee0c76819832abd92b20e6e0f5e0ce477df3bedaf3d6c1ad24e6aede82c31559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario a la receta \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "receta", array()), "nombre", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CookerCookingBundle:Comment:form.html.twig", "@CookerCooking/Comment/create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_ee0c76819832abd92b20e6e0f5e0ce477df3bedaf3d6c1ad24e6aede82c31559->leave($__internal_ee0c76819832abd92b20e6e0f5e0ce477df3bedaf3d6c1ad24e6aede82c31559_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Comment/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  53 => 8,  47 => 7,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Comment/create.html.twig #}

{% extends 'CookerCookingBundle::layout.html.twig' %}

{% block title %}Añadir comentario{% endblock%}

{% block body %}
    <h1>Añadir un comentario a la receta \"{{ comment.receta.nombre }}\"</h1>
    {% include 'CookerCookingBundle:Comment:form.html.twig' with { 'form': form } %}
{% endblock %}
", "@CookerCooking/Comment/create.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Comment\\create.html.twig");
    }
}

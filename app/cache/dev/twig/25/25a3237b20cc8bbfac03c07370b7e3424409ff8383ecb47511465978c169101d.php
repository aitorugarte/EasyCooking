<?php

/* CookerCookingBundle:Comment:create.html.twig */
class __TwigTemplate_a8c21d0ffdbddaa4974ea3fed7bb234bea7da056d9746085c289e8fe9726c110 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Comment:create.html.twig", 3);
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
        $__internal_71473d539d78de5502ddc0205acb2f4a3fa27d8a2143510de6a098be5bd971f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71473d539d78de5502ddc0205acb2f4a3fa27d8a2143510de6a098be5bd971f7->enter($__internal_71473d539d78de5502ddc0205acb2f4a3fa27d8a2143510de6a098be5bd971f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71473d539d78de5502ddc0205acb2f4a3fa27d8a2143510de6a098be5bd971f7->leave($__internal_71473d539d78de5502ddc0205acb2f4a3fa27d8a2143510de6a098be5bd971f7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c6eda41950c6ec5b280e648e7508bd9dbb8511431373f5d980ec200e331ba4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6eda41950c6ec5b280e648e7508bd9dbb8511431373f5d980ec200e331ba4b->enter($__internal_9c6eda41950c6ec5b280e648e7508bd9dbb8511431373f5d980ec200e331ba4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_9c6eda41950c6ec5b280e648e7508bd9dbb8511431373f5d980ec200e331ba4b->leave($__internal_9c6eda41950c6ec5b280e648e7508bd9dbb8511431373f5d980ec200e331ba4b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_32604341fc7d1b113c6d502d9d052cbbe2dfd769bc13b57ee13a3c0edcd5afc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32604341fc7d1b113c6d502d9d052cbbe2dfd769bc13b57ee13a3c0edcd5afc8->enter($__internal_32604341fc7d1b113c6d502d9d052cbbe2dfd769bc13b57ee13a3c0edcd5afc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario a la receta \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comentario"] ?? $this->getContext($context, "comentario")), "receta", array()), "nombre", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CookerCookingBundle:Comment:form.html.twig", "CookerCookingBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_32604341fc7d1b113c6d502d9d052cbbe2dfd769bc13b57ee13a3c0edcd5afc8->leave($__internal_32604341fc7d1b113c6d502d9d052cbbe2dfd769bc13b57ee13a3c0edcd5afc8_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Comment:create.html.twig";
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
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Comentario/create.html.twig #}

{% extends 'CookerCookingBundle::layout.html.twig' %}

{% block title %}Añadir comentario{% endblock%}

{% block body %}
    <h1>Añadir un comentario a la receta \"{{ comentario.receta.nombre }}\"</h1>
    {% include 'CookerCookingBundle:Comment:form.html.twig' with { 'form': form } %}
{% endblock %}
", "CookerCookingBundle:Comment:create.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Comment/create.html.twig");
    }
}

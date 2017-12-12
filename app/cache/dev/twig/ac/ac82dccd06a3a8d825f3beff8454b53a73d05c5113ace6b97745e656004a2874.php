<?php

/* CookerCookingBundle:Comment:create.html.twig */
class __TwigTemplate_751ee102fbda80854c84812decada2f83f8a3102bfe0cfb249a6712f63aed375 extends Twig_Template
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
        $__internal_8ce6b915cc4ef841dc0178482491f3fda3c105338a7465585dbe514670ed87d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce6b915cc4ef841dc0178482491f3fda3c105338a7465585dbe514670ed87d0->enter($__internal_8ce6b915cc4ef841dc0178482491f3fda3c105338a7465585dbe514670ed87d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ce6b915cc4ef841dc0178482491f3fda3c105338a7465585dbe514670ed87d0->leave($__internal_8ce6b915cc4ef841dc0178482491f3fda3c105338a7465585dbe514670ed87d0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c69171c302a157b123bcb86f712aad184d9f5405d2c29de78dd297da7051bfea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69171c302a157b123bcb86f712aad184d9f5405d2c29de78dd297da7051bfea->enter($__internal_c69171c302a157b123bcb86f712aad184d9f5405d2c29de78dd297da7051bfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_c69171c302a157b123bcb86f712aad184d9f5405d2c29de78dd297da7051bfea->leave($__internal_c69171c302a157b123bcb86f712aad184d9f5405d2c29de78dd297da7051bfea_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a3f0bbd09c275985b5a565396acad69de5ed9abd82ea9d32952b0fcc97350ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3f0bbd09c275985b5a565396acad69de5ed9abd82ea9d32952b0fcc97350ab->enter($__internal_9a3f0bbd09c275985b5a565396acad69de5ed9abd82ea9d32952b0fcc97350ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario a la receta \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comentario"] ?? $this->getContext($context, "comentario")), "receta", array()), "nombre", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CookerCookingBundle:Comment:form.html.twig", "CookerCookingBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_9a3f0bbd09c275985b5a565396acad69de5ed9abd82ea9d32952b0fcc97350ab->leave($__internal_9a3f0bbd09c275985b5a565396acad69de5ed9abd82ea9d32952b0fcc97350ab_prof);

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
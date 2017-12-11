<?php

/* @CookerCooking/Comment/create.html.twig */
class __TwigTemplate_8ea6d4b4aac7f8630790d3ad3e74a0dafa0852c9bc21d7db2ac9126715d43cff extends Twig_Template
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
        $__internal_965aba866609007aa2c6f11631c683ad59c236e9b643f4a03d08fbcdab2264ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965aba866609007aa2c6f11631c683ad59c236e9b643f4a03d08fbcdab2264ff->enter($__internal_965aba866609007aa2c6f11631c683ad59c236e9b643f4a03d08fbcdab2264ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Comment/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_965aba866609007aa2c6f11631c683ad59c236e9b643f4a03d08fbcdab2264ff->leave($__internal_965aba866609007aa2c6f11631c683ad59c236e9b643f4a03d08fbcdab2264ff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b9a754853d21e2ac8153495c6000a30ffed80f754a5aad218573219739dbe4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9a754853d21e2ac8153495c6000a30ffed80f754a5aad218573219739dbe4d->enter($__internal_5b9a754853d21e2ac8153495c6000a30ffed80f754a5aad218573219739dbe4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_5b9a754853d21e2ac8153495c6000a30ffed80f754a5aad218573219739dbe4d->leave($__internal_5b9a754853d21e2ac8153495c6000a30ffed80f754a5aad218573219739dbe4d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e2d71145581c90be80e4781b5e925d46dfb5c4c792b67048611cfc9cdffc198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2d71145581c90be80e4781b5e925d46dfb5c4c792b67048611cfc9cdffc198->enter($__internal_2e2d71145581c90be80e4781b5e925d46dfb5c4c792b67048611cfc9cdffc198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario a la receta \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comentario"] ?? $this->getContext($context, "comentario")), "receta", array()), "nombre", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CookerCookingBundle:Comment:form.html.twig", "@CookerCooking/Comment/create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_2e2d71145581c90be80e4781b5e925d46dfb5c4c792b67048611cfc9cdffc198->leave($__internal_2e2d71145581c90be80e4781b5e925d46dfb5c4c792b67048611cfc9cdffc198_prof);

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
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Comentario/create.html.twig #}

{% extends 'CookerCookingBundle::layout.html.twig' %}

{% block title %}Añadir comentario{% endblock%}

{% block body %}
    <h1>Añadir un comentario a la receta \"{{ comentario.receta.nombre }}\"</h1>
    {% include 'CookerCookingBundle:Comment:form.html.twig' with { 'form': form } %}
{% endblock %}
", "@CookerCooking/Comment/create.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Comment\\create.html.twig");
    }
}

<?php

/* CookerCookingBundle:Cook:showReceta.html.twig */
class __TwigTemplate_0ba45f583890dc3a654a71d43b2f2192de0a82774a153725f0f4095cf19d1cef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:showReceta.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CookerCookingBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e00a5f0c9f6d53840640b2a1d681c5f79c948a4195dbdb7241a72e9f8ae9eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e00a5f0c9f6d53840640b2a1d681c5f79c948a4195dbdb7241a72e9f8ae9eb1->enter($__internal_8e00a5f0c9f6d53840640b2a1d681c5f79c948a4195dbdb7241a72e9f8ae9eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:showReceta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e00a5f0c9f6d53840640b2a1d681c5f79c948a4195dbdb7241a72e9f8ae9eb1->leave($__internal_8e00a5f0c9f6d53840640b2a1d681c5f79c948a4195dbdb7241a72e9f8ae9eb1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_13e8ed8d8714c7b3563fc7ca71404908be9493d6fcace21eedbf952d794d1ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e8ed8d8714c7b3563fc7ca71404908be9493d6fcace21eedbf952d794d1ff8->enter($__internal_13e8ed8d8714c7b3563fc7ca71404908be9493d6fcace21eedbf952d794d1ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Detalles de la receta";
        
        $__internal_13e8ed8d8714c7b3563fc7ca71404908be9493d6fcace21eedbf952d794d1ff8->leave($__internal_13e8ed8d8714c7b3563fc7ca71404908be9493d6fcace21eedbf952d794d1ff8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71d6e561af119a8fa6559bceca630cd727093b8ae5a26f2de16b5146b9c4508d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d6e561af119a8fa6559bceca630cd727093b8ae5a26f2de16b5146b9c4508d->enter($__internal_71d6e561af119a8fa6559bceca630cd727093b8ae5a26f2de16b5146b9c4508d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h3 style=\"float:right\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showPlato", array("id" => $this->getAttribute($this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "tipo_plato", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "tipo_plato", array()), "nombre", array()), "html", null, true);
        echo "</a></h3>

\t<h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "nombre", array()), "html", null, true);
        echo "</h1>

\t<div class=\"date\">
\t\t";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "date", array()), "d-m-Y"), "html", null, true);
        echo "
\t</div>
\t<img class=\"imgGran\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "imagen", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "nombre", array()), "html", null, true);
        echo "\" />

\t<h2>Ingredientes</h2>
\t<ul class=\"ingredientes\">
\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredientes"] ?? $this->getContext($context, "ingredientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingrediente"]) {
            // line 19
            echo "\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showIngr", array("id" => $this->getAttribute($context["ingrediente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "nombre", array()), "html", null, true);
            echo "</a></li>
\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingrediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
\t<h2>Preparación</h2>
\t<div class=\"body\">
\t\t";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "detalles", array()), "html", null, true);
        echo "
\t</div>
\t
\t<br><br><br>

\t<section class=\"previous-comments\">
\t\t<h3>Comentarios</h3>
\t\t";
        // line 31
        $this->loadTemplate("CookerCookingBundle:Comment:list.html.twig", "CookerCookingBundle:Cook:showReceta.html.twig", 31)->display(array_merge($context, array("comentarios" => ($context["comentarios"] ?? $this->getContext($context, "comentarios")))));
        // line 32
        echo "\t</section>

\t<section class=\"coments\" id=\"coments\">
\t
\t<h3 style=\"margin-top: 40px\">Añadir comentario</h3>
\t\t";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CookerCookingBundle:Comentario:new", array("receta_id" => $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "id", array()))));
        echo "
\t</section>
\t
\t</section>
\t";
        // line 41
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 45
        echo "
\t<h3 style=\"color:red\">Recetas relacionadas</h3>

\tMostrar varias recetas en lista horizontal que tengan en común algún ingrediente


";
        
        $__internal_71d6e561af119a8fa6559bceca630cd727093b8ae5a26f2de16b5146b9c4508d->leave($__internal_71d6e561af119a8fa6559bceca630cd727093b8ae5a26f2de16b5146b9c4508d_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f05a9422fc015eb1a79e20ab9defc575a4e0f591db4d123c0af127f393a9b4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05a9422fc015eb1a79e20ab9defc575a4e0f591db4d123c0af127f393a9b4c3->enter($__internal_f05a9422fc015eb1a79e20ab9defc575a4e0f591db4d123c0af127f393a9b4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        
        $__internal_f05a9422fc015eb1a79e20ab9defc575a4e0f591db4d123c0af127f393a9b4c3->leave($__internal_f05a9422fc015eb1a79e20ab9defc575a4e0f591db4d123c0af127f393a9b4c3_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:showReceta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 43,  151 => 42,  145 => 41,  132 => 45,  130 => 41,  123 => 37,  116 => 32,  114 => 31,  104 => 24,  99 => 21,  88 => 19,  84 => 18,  75 => 14,  70 => 12,  64 => 9,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/showReceta.html.twig #}
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}Detalles de la receta{% endblock %}

{% block body %}

    <h3 style=\"float:right\"><a href=\"{{ path('cooker_cook_showPlato', { 'id': receta.tipo_plato.id }) }}\">{{ receta.tipo_plato.nombre }}</a></h3>

\t<h1>{{ receta.nombre }}</h1>

\t<div class=\"date\">
\t\t{{ receta.date|date('d-m-Y') }}
\t</div>
\t<img class=\"imgGran\" src=\"{{receta.imagen}}\" alt=\"{{receta.nombre}}\" />

\t<h2>Ingredientes</h2>
\t<ul class=\"ingredientes\">
\t{% for ingrediente in ingredientes %}
\t<li><a href=\"{{ path('cooker_cook_showIngr', { 'id': ingrediente.id }) }}\">{{ ingrediente.nombre }}</a></li>
\t {% endfor %}

\t<h2>Preparación</h2>
\t<div class=\"body\">
\t\t{{ receta.detalles }}
\t</div>
\t
\t<br><br><br>

\t<section class=\"previous-comments\">
\t\t<h3>Comentarios</h3>
\t\t{% include 'CookerCookingBundle:Comment:list.html.twig' with { 'comentarios': comentarios } %}
\t</section>

\t<section class=\"coments\" id=\"coments\">
\t
\t<h3 style=\"margin-top: 40px\">Añadir comentario</h3>
\t\t{{ render(controller( 'CookerCookingBundle:Comentario:new', { 'receta_id': receta.id } )) }}
\t</section>
\t
\t</section>
\t{% block stylesheets %}
\t{{ parent() }}
\t<link href=\"{{ asset('css/blog.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
\t{% endblock %}

\t<h3 style=\"color:red\">Recetas relacionadas</h3>

\tMostrar varias recetas en lista horizontal que tengan en común algún ingrediente


{% endblock %}
", "CookerCookingBundle:Cook:showReceta.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/showReceta.html.twig");
    }
}

<?php

/* @CookerCooking/Cook/showReceta.html.twig */
class __TwigTemplate_83f3de1dad7250baabe7c666839f14e5ea5c691a05f4be9c611d7eb4b3fdcb72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Cook/showReceta.html.twig", 2);
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
        $__internal_438e8b633ec3a770db1ccc561cf6f297d91bd157820a242f0bbe2416b3e40296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438e8b633ec3a770db1ccc561cf6f297d91bd157820a242f0bbe2416b3e40296->enter($__internal_438e8b633ec3a770db1ccc561cf6f297d91bd157820a242f0bbe2416b3e40296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/showReceta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_438e8b633ec3a770db1ccc561cf6f297d91bd157820a242f0bbe2416b3e40296->leave($__internal_438e8b633ec3a770db1ccc561cf6f297d91bd157820a242f0bbe2416b3e40296_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eeb5aa308dea853effd5c9c8abc0e63738582e032a43f6942708c72e5fe3e75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb5aa308dea853effd5c9c8abc0e63738582e032a43f6942708c72e5fe3e75b->enter($__internal_eeb5aa308dea853effd5c9c8abc0e63738582e032a43f6942708c72e5fe3e75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Detalles de la receta";
        
        $__internal_eeb5aa308dea853effd5c9c8abc0e63738582e032a43f6942708c72e5fe3e75b->leave($__internal_eeb5aa308dea853effd5c9c8abc0e63738582e032a43f6942708c72e5fe3e75b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_67b5bfa8b6e3ccf5a8212064b7d64b7fcf5b20ab7517fb6ce137c12ea4b79192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b5bfa8b6e3ccf5a8212064b7d64b7fcf5b20ab7517fb6ce137c12ea4b79192->enter($__internal_67b5bfa8b6e3ccf5a8212064b7d64b7fcf5b20ab7517fb6ce137c12ea4b79192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("CookerCookingBundle:Comment:list.html.twig", "@CookerCooking/Cook/showReceta.html.twig", 31)->display(array_merge($context, array("comentarios" => ($context["comentarios"] ?? $this->getContext($context, "comentarios")))));
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
\t<h3 style=\"color:red; margin-bottom: 0px\">Recetas relacionadas</h3>
\t
\t<ul style=\"list-style-type: none; margin: 0; padding: 0;\">
\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["otrasrecetas"] ?? $this->getContext($context, "otrasrecetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["otrareceta"]) {
            // line 50
            echo "\t<li style= \"float: left; display: block; text-align: center; padding: 16px; \">
\t<header>
\t\t<h3><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["otrareceta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["otrareceta"], "nombre", array()), "html", null, true);
            echo "</a></h3>
\t</header>
\t\t<img class=\"imgPeq\" src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["otrareceta"], "imagen", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["otrareceta"], "nombre", array()), "html", null, true);
            echo "\" />
\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['otrareceta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t</ul>

";
        
        $__internal_67b5bfa8b6e3ccf5a8212064b7d64b7fcf5b20ab7517fb6ce137c12ea4b79192->leave($__internal_67b5bfa8b6e3ccf5a8212064b7d64b7fcf5b20ab7517fb6ce137c12ea4b79192_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3fc3addede883509e1acfa0631ad1b2fa99ad26fe5bf2d98c7589121bd83532d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc3addede883509e1acfa0631ad1b2fa99ad26fe5bf2d98c7589121bd83532d->enter($__internal_3fc3addede883509e1acfa0631ad1b2fa99ad26fe5bf2d98c7589121bd83532d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        
        $__internal_3fc3addede883509e1acfa0631ad1b2fa99ad26fe5bf2d98c7589121bd83532d->leave($__internal_3fc3addede883509e1acfa0631ad1b2fa99ad26fe5bf2d98c7589121bd83532d_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Cook/showReceta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 43,  179 => 42,  173 => 41,  164 => 57,  153 => 54,  146 => 52,  142 => 50,  138 => 49,  132 => 45,  130 => 41,  123 => 37,  116 => 32,  114 => 31,  104 => 24,  99 => 21,  88 => 19,  84 => 18,  75 => 14,  70 => 12,  64 => 9,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 2,);
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

\t<h3 style=\"color:red; margin-bottom: 0px\">Recetas relacionadas</h3>
\t
\t<ul style=\"list-style-type: none; margin: 0; padding: 0;\">
\t{% for otrareceta in otrasrecetas %}
\t<li style= \"float: left; display: block; text-align: center; padding: 16px; \">
\t<header>
\t\t<h3><a href=\"{{ path('cooker_cook_showReceta', { 'id': otrareceta.id }) }}\">{{ otrareceta.nombre }}</a></h3>
\t</header>
\t\t<img class=\"imgPeq\" src=\"{{otrareceta.imagen}}\" alt=\"{{otrareceta.nombre}}\" />
\t</li>
\t{% endfor %}
\t</ul>

{% endblock %}
", "@CookerCooking/Cook/showReceta.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\showReceta.html.twig");
    }
}

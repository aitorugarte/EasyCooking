<?php

/* @CookerCooking/Cook/showReceta.html.twig */
class __TwigTemplate_e42f29fae19357a14b69a1d5318e0e87d7cf28d04c4195e2a9e1344ad4b4f3fc extends Twig_Template
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
        $__internal_b08635caeb4dd57740e618e28909e97e8edb7a331fa2ceebdf47a6a5bf5a45b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b08635caeb4dd57740e618e28909e97e8edb7a331fa2ceebdf47a6a5bf5a45b0->enter($__internal_b08635caeb4dd57740e618e28909e97e8edb7a331fa2ceebdf47a6a5bf5a45b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/showReceta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b08635caeb4dd57740e618e28909e97e8edb7a331fa2ceebdf47a6a5bf5a45b0->leave($__internal_b08635caeb4dd57740e618e28909e97e8edb7a331fa2ceebdf47a6a5bf5a45b0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7b185fb49a105beb82a334f0400341e0d5d7b3cfaafed1a65fd1ba71f20af1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b185fb49a105beb82a334f0400341e0d5d7b3cfaafed1a65fd1ba71f20af1f->enter($__internal_b7b185fb49a105beb82a334f0400341e0d5d7b3cfaafed1a65fd1ba71f20af1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Detalles de la receta";
        
        $__internal_b7b185fb49a105beb82a334f0400341e0d5d7b3cfaafed1a65fd1ba71f20af1f->leave($__internal_b7b185fb49a105beb82a334f0400341e0d5d7b3cfaafed1a65fd1ba71f20af1f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebc7aa96dc60efb7dabcd9853b89d5c8bb3e57e0db9c0041ba4a918f8d1751a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc7aa96dc60efb7dabcd9853b89d5c8bb3e57e0db9c0041ba4a918f8d1751a9->enter($__internal_ebc7aa96dc60efb7dabcd9853b89d5c8bb3e57e0db9c0041ba4a918f8d1751a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ebc7aa96dc60efb7dabcd9853b89d5c8bb3e57e0db9c0041ba4a918f8d1751a9->leave($__internal_ebc7aa96dc60efb7dabcd9853b89d5c8bb3e57e0db9c0041ba4a918f8d1751a9_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_03df1f59ce2717404b395d0f2f8e8e9abb20b4ca7b1231e15e4d9bcc3ec750c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03df1f59ce2717404b395d0f2f8e8e9abb20b4ca7b1231e15e4d9bcc3ec750c2->enter($__internal_03df1f59ce2717404b395d0f2f8e8e9abb20b4ca7b1231e15e4d9bcc3ec750c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        
        $__internal_03df1f59ce2717404b395d0f2f8e8e9abb20b4ca7b1231e15e4d9bcc3ec750c2->leave($__internal_03df1f59ce2717404b395d0f2f8e8e9abb20b4ca7b1231e15e4d9bcc3ec750c2_prof);

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

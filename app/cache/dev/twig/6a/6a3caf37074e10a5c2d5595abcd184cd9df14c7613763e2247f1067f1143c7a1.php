<?php

/* CookerCookingBundle:Cook:show.html.twig */
class __TwigTemplate_460dc01cb7a6e46f75aabb81ff1bdad84010d28552a343b46506dcc5b6b0315b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:show.html.twig", 2);
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
        $__internal_42f3e4b677c9b0db168f967fb43dcc7a0f79633de03a841c2faf856264794b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f3e4b677c9b0db168f967fb43dcc7a0f79633de03a841c2faf856264794b71->enter($__internal_42f3e4b677c9b0db168f967fb43dcc7a0f79633de03a841c2faf856264794b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42f3e4b677c9b0db168f967fb43dcc7a0f79633de03a841c2faf856264794b71->leave($__internal_42f3e4b677c9b0db168f967fb43dcc7a0f79633de03a841c2faf856264794b71_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a56f8572fc7b55eb79d0f36ad5d95a795826e6b8c9b515c292ce0e410cf82d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a56f8572fc7b55eb79d0f36ad5d95a795826e6b8c9b515c292ce0e410cf82d1->enter($__internal_1a56f8572fc7b55eb79d0f36ad5d95a795826e6b8c9b515c292ce0e410cf82d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Detalles de la receta";
        
        $__internal_1a56f8572fc7b55eb79d0f36ad5d95a795826e6b8c9b515c292ce0e410cf82d1->leave($__internal_1a56f8572fc7b55eb79d0f36ad5d95a795826e6b8c9b515c292ce0e410cf82d1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fe77a469d6d63ac6fbb2f211249eca3690cfa61e3002eeb56a7cbb5567110ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe77a469d6d63ac6fbb2f211249eca3690cfa61e3002eeb56a7cbb5567110ae->enter($__internal_9fe77a469d6d63ac6fbb2f211249eca3690cfa61e3002eeb56a7cbb5567110ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h3 style=\"float:right\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "tipo_plato", array()), "html", null, true);
        echo "</h3>
\t<h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "nombre", array()), "html", null, true);
        echo "</h1>
\t

\t<div class=\"date\">
\t\t";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "date", array()), "d-m-Y"), "html", null, true);
        echo "
\t</div>
\t<img class=\"imgGran\" src=\"/css/images/";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "id", array()), "html", null, true);
        echo ".jpg\" alt=\"receta\" />

\t<h2>Ingredientes</h2>
\t<ul class=\"ingredientes\">
\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredientes"] ?? $this->getContext($context, "ingredientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingrediente"]) {
            // line 18
            echo "\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_show2", array("id" => $this->getAttribute($context["ingrediente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "nombre", array()), "html", null, true);
            echo "</a></li>
\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingrediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
\t<h2>Preparación</h2>
\t<div class=\"body\">
\t\t";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "detalles", array()), "html", null, true);
        echo "
\t</div>
\t
\t<br><br><br>

\t<section class=\"previous-comments\">
\t\t<h3>Comentarios</h3>
\t\t";
        // line 30
        $this->loadTemplate("CookerCookingBundle:Comment:list.html.twig", "CookerCookingBundle:Cook:show.html.twig", 30)->display(array_merge($context, array("comentarios" => ($context["comentarios"] ?? $this->getContext($context, "comentarios")))));
        // line 31
        echo "\t</section>

\t<section class=\"coments\" id=\"coments\">
\t
\t<h3 style=\"margin-top: 40px\">Añadir comentario</h3>
\t\t";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CookerCookingBundle:Comentario:new", array("receta_id" => $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "id", array()))));
        echo "
\t</section>
\t
\t</section>
\t";
        // line 40
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 44
        echo "
";
        
        $__internal_9fe77a469d6d63ac6fbb2f211249eca3690cfa61e3002eeb56a7cbb5567110ae->leave($__internal_9fe77a469d6d63ac6fbb2f211249eca3690cfa61e3002eeb56a7cbb5567110ae_prof);

    }

    // line 40
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3373b80e3a521e3669ffbc97deae0d48774e376d8c2b4b5344833b0be6e2fe3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3373b80e3a521e3669ffbc97deae0d48774e376d8c2b4b5344833b0be6e2fe3e->enter($__internal_3373b80e3a521e3669ffbc97deae0d48774e376d8c2b4b5344833b0be6e2fe3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 41
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        
        $__internal_3373b80e3a521e3669ffbc97deae0d48774e376d8c2b4b5344833b0be6e2fe3e->leave($__internal_3373b80e3a521e3669ffbc97deae0d48774e376d8c2b4b5344833b0be6e2fe3e_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  140 => 41,  134 => 40,  126 => 44,  124 => 40,  117 => 36,  110 => 31,  108 => 30,  98 => 23,  93 => 20,  82 => 18,  78 => 17,  71 => 13,  66 => 11,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/showRecetas.html.twig #}
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}Detalles de la receta{% endblock %}

{% block body %}
\t<h3 style=\"float:right\">{{ receta.tipo_plato }}</h3>
\t<h1>{{ receta.nombre }}</h1>
\t

\t<div class=\"date\">
\t\t{{ receta.date|date('d-m-Y') }}
\t</div>
\t<img class=\"imgGran\" src=\"/css/images/{{receta.id}}.jpg\" alt=\"receta\" />

\t<h2>Ingredientes</h2>
\t<ul class=\"ingredientes\">
\t{% for ingrediente in ingredientes %}
\t<li><a href=\"{{ path('cooker_cook_show2', { 'id': ingrediente.id }) }}\">{{ ingrediente.nombre }}</a></li>
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

{% endblock %}
", "CookerCookingBundle:Cook:show.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/show.html.twig");
    }
}

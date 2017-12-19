<?php

/* @CookerCooking/Cook/showReceta.html.twig */
class __TwigTemplate_e42f29fae19357a14b69a1d5318e0e87d7cf28d04c4195e2a9e1344ad4b4f3fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::sidebar.html.twig", "@CookerCooking/Cook/showReceta.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CookerCookingBundle::sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4afc056033d359c0f9a2755582e84f402c77b22d30a6a86d854be89fd1ece0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4afc056033d359c0f9a2755582e84f402c77b22d30a6a86d854be89fd1ece0f0->enter($__internal_4afc056033d359c0f9a2755582e84f402c77b22d30a6a86d854be89fd1ece0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/showReceta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4afc056033d359c0f9a2755582e84f402c77b22d30a6a86d854be89fd1ece0f0->leave($__internal_4afc056033d359c0f9a2755582e84f402c77b22d30a6a86d854be89fd1ece0f0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f8c37247ff9a18e7d0d1c23b6be61a12822ea2d0f97df24c0ee818b9cb7f14d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8c37247ff9a18e7d0d1c23b6be61a12822ea2d0f97df24c0ee818b9cb7f14d->enter($__internal_0f8c37247ff9a18e7d0d1c23b6be61a12822ea2d0f97df24c0ee818b9cb7f14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Detalles de la receta", array(), "messages");
        
        $__internal_0f8c37247ff9a18e7d0d1c23b6be61a12822ea2d0f97df24c0ee818b9cb7f14d->leave($__internal_0f8c37247ff9a18e7d0d1c23b6be61a12822ea2d0f97df24c0ee818b9cb7f14d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09352038fd7c5a55d867fb392c8a5bc34b71dbea1cbddd69e2eae27fcf28ffac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09352038fd7c5a55d867fb392c8a5bc34b71dbea1cbddd69e2eae27fcf28ffac->enter($__internal_09352038fd7c5a55d867fb392c8a5bc34b71dbea1cbddd69e2eae27fcf28ffac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h3 class=\"titulo\"><a href=\"";
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

\t<h2>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Ingredientes", array(), "messages");
        echo "</h2>
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
\t<h2>";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Preparación", array(), "messages");
        echo "</h2>
\t<div class=\"body\">
\t\t";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "detalles", array()), "html", null, true);
        echo "
\t</div>
\t
\t<br><br><br>

\t<section class=\"previous-comments\">
\t\t<h3>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Comentarios", array(), "messages");
        echo "</h3>
\t\t";
        // line 31
        $this->loadTemplate("CookerCookingBundle:Comment:list.html.twig", "@CookerCooking/Cook/showReceta.html.twig", 31)->display(array_merge($context, array("comentarios" => ($context["comentarios"] ?? $this->getContext($context, "comentarios")))));
        // line 32
        echo "\t</section>

\t<section class=\"coments\" id=\"coments\">
\t
\t<h3 class=\"aniadirCom\">";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Añadir comentario", array(), "messages");
        echo "</h3>
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
\t<h3 class=\"relacionadas\">";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Recetas relacionadas", array(), "messages");
        echo "</h3>
\t
\t<ul class=\"listaRelacionadas\">
\t";
        // line 49
        $context["break"] = 0;
        // line 50
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["otrasrecetas"] ?? $this->getContext($context, "otrasrecetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["otrareceta"]) {
            if ((($context["break"] ?? $this->getContext($context, "break")) < 3)) {
                // line 51
                echo "
\t";
                // line 52
                if (($this->getAttribute($context["otrareceta"], "nombre", array()) != $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "nombre", array()))) {
                    // line 53
                    echo "
\t<li class=\"otraReceta\">
\t<header>
\t\t<h3><a href=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["otrareceta"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["otrareceta"], "nombre", array()), "html", null, true);
                    echo "</a></h3>
\t</header>
\t\t<img class=\"imgPeq\" src=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($context["otrareceta"], "imagen", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["otrareceta"], "nombre", array()), "html", null, true);
                    echo "\" />
\t</li>
\t";
                    // line 60
                    $context["break"] = (($context["break"] ?? $this->getContext($context, "break")) + 1);
                    // line 61
                    echo "\t";
                }
                // line 62
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['otrareceta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t</ul>

";
        
        $__internal_09352038fd7c5a55d867fb392c8a5bc34b71dbea1cbddd69e2eae27fcf28ffac->leave($__internal_09352038fd7c5a55d867fb392c8a5bc34b71dbea1cbddd69e2eae27fcf28ffac_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a2b72c47dd7eb34a059aa62e78cfc8234d5a468b26d74d05c32123ae3e6788e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2b72c47dd7eb34a059aa62e78cfc8234d5a468b26d74d05c32123ae3e6788e->enter($__internal_6a2b72c47dd7eb34a059aa62e78cfc8234d5a468b26d74d05c32123ae3e6788e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/comentarios.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        
        $__internal_6a2b72c47dd7eb34a059aa62e78cfc8234d5a468b26d74d05c32123ae3e6788e->leave($__internal_6a2b72c47dd7eb34a059aa62e78cfc8234d5a468b26d74d05c32123ae3e6788e_prof);

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
        return array (  217 => 43,  212 => 42,  206 => 41,  197 => 63,  190 => 62,  187 => 61,  185 => 60,  178 => 58,  171 => 56,  166 => 53,  164 => 52,  161 => 51,  155 => 50,  153 => 49,  147 => 46,  144 => 45,  142 => 41,  135 => 37,  131 => 36,  125 => 32,  123 => 31,  119 => 30,  110 => 24,  105 => 22,  102 => 21,  91 => 19,  87 => 18,  82 => 16,  75 => 14,  70 => 12,  64 => 9,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 2,);
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
{% extends 'CookerCookingBundle::sidebar.html.twig' %}
{% block title %}{% trans %}Detalles de la receta{% endtrans %}{% endblock %}

{% block body %}

    <h3 class=\"titulo\"><a href=\"{{ path('cooker_cook_showPlato', { 'id': receta.tipo_plato.id }) }}\">{{ receta.tipo_plato.nombre }}</a></h3>

\t<h1>{{ receta.nombre }}</h1>

\t<div class=\"date\">
\t\t{{ receta.date|date('d-m-Y') }}
\t</div>
\t<img class=\"imgGran\" src=\"{{receta.imagen}}\" alt=\"{{receta.nombre}}\" />

\t<h2>{% trans %}Ingredientes{% endtrans %}</h2>
\t<ul class=\"ingredientes\">
\t{% for ingrediente in ingredientes %}
\t<li><a href=\"{{ path('cooker_cook_showIngr', { 'id': ingrediente.id }) }}\">{{ ingrediente.nombre }}</a></li>
\t {% endfor %}

\t<h2>{% trans %}Preparación{% endtrans %}</h2>
\t<div class=\"body\">
\t\t{{ receta.detalles }}
\t</div>
\t
\t<br><br><br>

\t<section class=\"previous-comments\">
\t\t<h3>{% trans %}Comentarios{% endtrans %}</h3>
\t\t{% include 'CookerCookingBundle:Comment:list.html.twig' with { 'comentarios': comentarios } %}
\t</section>

\t<section class=\"coments\" id=\"coments\">
\t
\t<h3 class=\"aniadirCom\">{% trans %}Añadir comentario{% endtrans %}</h3>
\t\t{{ render(controller( 'CookerCookingBundle:Comentario:new', { 'receta_id': receta.id } )) }}
\t</section>
\t
\t</section>
\t{% block stylesheets %}
\t{{ parent() }}
\t<link href=\"{{ asset('css/comentarios.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
\t{% endblock %}

\t<h3 class=\"relacionadas\">{% trans %}Recetas relacionadas{% endtrans %}</h3>
\t
\t<ul class=\"listaRelacionadas\">
\t{% set break = 0 %}
\t{% for otrareceta in otrasrecetas if break < 3 %}

\t{% if(otrareceta.nombre != receta.nombre) %}

\t<li class=\"otraReceta\">
\t<header>
\t\t<h3><a href=\"{{ path('cooker_cook_showReceta', { 'id': otrareceta.id }) }}\">{{ otrareceta.nombre }}</a></h3>
\t</header>
\t\t<img class=\"imgPeq\" src=\"{{otrareceta.imagen}}\" alt=\"{{otrareceta.nombre}}\" />
\t</li>
\t{% set break = break + 1 %}
\t{% endif %}
\t{% endfor %}
\t</ul>

{% endblock %}
", "@CookerCooking/Cook/showReceta.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\showReceta.html.twig");
    }
}

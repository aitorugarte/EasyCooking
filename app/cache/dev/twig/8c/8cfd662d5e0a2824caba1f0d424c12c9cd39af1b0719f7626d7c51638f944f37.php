<?php

/* CookerCookingBundle:Cook:showRecetas.html.twig */
class __TwigTemplate_12ead485e8bc1a15a79363eb4e37ff30a30c1bedff41822d8eeb0e5d1b61b96b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:showRecetas.html.twig", 2);
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
        $__internal_c979fdf65c407fc7056342e9bc1be1c300100af65a6fc1eb24819d8ebd1a1fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c979fdf65c407fc7056342e9bc1be1c300100af65a6fc1eb24819d8ebd1a1fa6->enter($__internal_c979fdf65c407fc7056342e9bc1be1c300100af65a6fc1eb24819d8ebd1a1fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:showRecetas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c979fdf65c407fc7056342e9bc1be1c300100af65a6fc1eb24819d8ebd1a1fa6->leave($__internal_c979fdf65c407fc7056342e9bc1be1c300100af65a6fc1eb24819d8ebd1a1fa6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8d599af77acbab2bc37e3731779fbdf6a00eb19da33fd8288b09e3c76383f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d599af77acbab2bc37e3731779fbdf6a00eb19da33fd8288b09e3c76383f02->enter($__internal_a8d599af77acbab2bc37e3731779fbdf6a00eb19da33fd8288b09e3c76383f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Detalles de la receta";
        
        $__internal_a8d599af77acbab2bc37e3731779fbdf6a00eb19da33fd8288b09e3c76383f02->leave($__internal_a8d599af77acbab2bc37e3731779fbdf6a00eb19da33fd8288b09e3c76383f02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8555acfff313c5a6e8e2c62bbb49b99882254c5a5671857c17464178dc661264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8555acfff313c5a6e8e2c62bbb49b99882254c5a5671857c17464178dc661264->enter($__internal_8555acfff313c5a6e8e2c62bbb49b99882254c5a5671857c17464178dc661264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "nombre", array()), "html", null, true);
            echo "</li>
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
        $this->loadTemplate("CookerCookingBundle:Comment:list.html.twig", "CookerCookingBundle:Cook:showRecetas.html.twig", 30)->display(array_merge($context, array("comentarios" => ($context["comentarios"] ?? $this->getContext($context, "comentarios")))));
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
        
        $__internal_8555acfff313c5a6e8e2c62bbb49b99882254c5a5671857c17464178dc661264->leave($__internal_8555acfff313c5a6e8e2c62bbb49b99882254c5a5671857c17464178dc661264_prof);

    }

    // line 40
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc52945636476cc294c6786254cded5ec932022ce628dce45c285bf3eba5833b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc52945636476cc294c6786254cded5ec932022ce628dce45c285bf3eba5833b->enter($__internal_bc52945636476cc294c6786254cded5ec932022ce628dce45c285bf3eba5833b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 41
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        
        $__internal_bc52945636476cc294c6786254cded5ec932022ce628dce45c285bf3eba5833b->leave($__internal_bc52945636476cc294c6786254cded5ec932022ce628dce45c285bf3eba5833b_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:showRecetas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  138 => 41,  132 => 40,  124 => 44,  122 => 40,  115 => 36,  108 => 31,  106 => 30,  96 => 23,  91 => 20,  82 => 18,  78 => 17,  71 => 13,  66 => 11,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 2,);
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
\t<li>{{ ingrediente.nombre }}</li>
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
", "CookerCookingBundle:Cook:showRecetas.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/showRecetas.html.twig");
    }
}

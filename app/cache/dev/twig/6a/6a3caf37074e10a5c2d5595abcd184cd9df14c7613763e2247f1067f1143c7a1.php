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
        $__internal_2ee21bf3a2f26846d51f4b2b2263f4d16a15a75626b512810543ea99c439ee42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee21bf3a2f26846d51f4b2b2263f4d16a15a75626b512810543ea99c439ee42->enter($__internal_2ee21bf3a2f26846d51f4b2b2263f4d16a15a75626b512810543ea99c439ee42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ee21bf3a2f26846d51f4b2b2263f4d16a15a75626b512810543ea99c439ee42->leave($__internal_2ee21bf3a2f26846d51f4b2b2263f4d16a15a75626b512810543ea99c439ee42_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9e4433810010ae60afaa939d001f6ee40df510c9ce4a24d469f34eccb35f7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e4433810010ae60afaa939d001f6ee40df510c9ce4a24d469f34eccb35f7e7->enter($__internal_a9e4433810010ae60afaa939d001f6ee40df510c9ce4a24d469f34eccb35f7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Detalles de la receta";
        
        $__internal_a9e4433810010ae60afaa939d001f6ee40df510c9ce4a24d469f34eccb35f7e7->leave($__internal_a9e4433810010ae60afaa939d001f6ee40df510c9ce4a24d469f34eccb35f7e7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b538c30ca0016b691effe38ab2bf33366f8871f325a74c31cdbfed877022b5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b538c30ca0016b691effe38ab2bf33366f8871f325a74c31cdbfed877022b5cd->enter($__internal_b538c30ca0016b691effe38ab2bf33366f8871f325a74c31cdbfed877022b5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "nombre", array()), "html", null, true);
        echo "</h1>
\t<div class=\"date\">
\t\t";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "date", array()), "d-m-Y"), "html", null, true);
        echo "
\t</div>
\t<img class=\"imgPeq\" src=\"/images/fondo.jpg\" alt=\"d\" />
\t<h2>Ingredientes</h2>

\t<h2>Preparación</h2>
\t<div class=\"body\">
\t\t";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "detalles", array()), "html", null, true);
        echo "
\t</div>
\t
\t<br><br><br>

\t<section class=\"previous-comments\">
\t\t<h3>Comentarios</h3>
\t\t";
        // line 22
        $this->loadTemplate("CookerCookingBundle:Comment:list.html.twig", "CookerCookingBundle:Cook:show.html.twig", 22)->display(array_merge($context, array("comentarios" => ($context["comentarios"] ?? $this->getContext($context, "comentarios")))));
        // line 23
        echo "\t</section>

\t<section class=\"coments\" id=\"coments\">
\t
\t<h3 style=\"margin-top: 40px\">Añadir comentario</h3>
\t\t";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CookerCookingBundle:Comentario:new", array("receta_id" => $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "id", array()))));
        echo "
\t</section>
\t
\t</section>
\t";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "
";
        
        $__internal_b538c30ca0016b691effe38ab2bf33366f8871f325a74c31cdbfed877022b5cd->leave($__internal_b538c30ca0016b691effe38ab2bf33366f8871f325a74c31cdbfed877022b5cd_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac47216719ed6e078f750038d347ae08ae0d8166c964d7ed3693206ec282b799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac47216719ed6e078f750038d347ae08ae0d8166c964d7ed3693206ec282b799->enter($__internal_ac47216719ed6e078f750038d347ae08ae0d8166c964d7ed3693206ec282b799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 33
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        
        $__internal_ac47216719ed6e078f750038d347ae08ae0d8166c964d7ed3693206ec282b799->leave($__internal_ac47216719ed6e078f750038d347ae08ae0d8166c964d7ed3693206ec282b799_prof);

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
        return array (  117 => 34,  112 => 33,  106 => 32,  98 => 36,  96 => 32,  89 => 28,  82 => 23,  80 => 22,  70 => 15,  60 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/show.html.twig #}
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}Detalles de la receta{% endblock %}

{% block body %}
\t<h1>{{ receta.nombre }}</h1>
\t<div class=\"date\">
\t\t{{ receta.date|date('d-m-Y') }}
\t</div>
\t<img class=\"imgPeq\" src=\"/images/fondo.jpg\" alt=\"d\" />
\t<h2>Ingredientes</h2>

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

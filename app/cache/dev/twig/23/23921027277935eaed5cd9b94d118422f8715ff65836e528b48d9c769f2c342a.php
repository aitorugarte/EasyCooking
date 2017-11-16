<?php

/* @CookerCooking/Cook/show.html.twig */
class __TwigTemplate_0acb0a39e037e6431a1d803e164f5d37debdb224700bf370b1da3fbc22f002ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Cook/show.html.twig", 2);
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
        $__internal_3a2a0c569f410c4757baafab5be49164756e045e87a4a999dc67ed7a5be99de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2a0c569f410c4757baafab5be49164756e045e87a4a999dc67ed7a5be99de7->enter($__internal_3a2a0c569f410c4757baafab5be49164756e045e87a4a999dc67ed7a5be99de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a2a0c569f410c4757baafab5be49164756e045e87a4a999dc67ed7a5be99de7->leave($__internal_3a2a0c569f410c4757baafab5be49164756e045e87a4a999dc67ed7a5be99de7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ea20811745e484a318e47d28552fdb5ccd4b172f14e051ab8d5b91e976d21df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea20811745e484a318e47d28552fdb5ccd4b172f14e051ab8d5b91e976d21df->enter($__internal_5ea20811745e484a318e47d28552fdb5ccd4b172f14e051ab8d5b91e976d21df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Detalles de la receta";
        
        $__internal_5ea20811745e484a318e47d28552fdb5ccd4b172f14e051ab8d5b91e976d21df->leave($__internal_5ea20811745e484a318e47d28552fdb5ccd4b172f14e051ab8d5b91e976d21df_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b97a2f37f1c9f04f1003c5e56642b3aebdefb946295d8b4c8aa6d486e3ff0089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97a2f37f1c9f04f1003c5e56642b3aebdefb946295d8b4c8aa6d486e3ff0089->enter($__internal_b97a2f37f1c9f04f1003c5e56642b3aebdefb946295d8b4c8aa6d486e3ff0089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t<div class=\"body\">
\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "detalles", array()), "html", null, true);
        echo "
\t</div>
\t
\t<br><br><br>

\t<section class=\"previous-comments\">
\t\t<h3>Comentarios</h3>
\t\t";
        // line 18
        $this->loadTemplate("CookerCookingBundle:Comment:list.html.twig", "@CookerCooking/Cook/show.html.twig", 18)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 19
        echo "\t</section>

\t<section class=\"comments\" id=\"comments\">
\t
\t<h3 style=\"margin-top: 40px\">Añadir comentario</h3>
\t\t";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CookerCookingBundle:Comment:new", array("receta_id" => $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "id", array()))));
        echo "
\t</section>
\t
\t</section>
\t";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
";
        
        $__internal_b97a2f37f1c9f04f1003c5e56642b3aebdefb946295d8b4c8aa6d486e3ff0089->leave($__internal_b97a2f37f1c9f04f1003c5e56642b3aebdefb946295d8b4c8aa6d486e3ff0089_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_25d248392cb956a19d56e8f057c31f65f3f393d12edb89c3cef322f61e3a216d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d248392cb956a19d56e8f057c31f65f3f393d12edb89c3cef322f61e3a216d->enter($__internal_25d248392cb956a19d56e8f057c31f65f3f393d12edb89c3cef322f61e3a216d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        
        $__internal_25d248392cb956a19d56e8f057c31f65f3f393d12edb89c3cef322f61e3a216d->leave($__internal_25d248392cb956a19d56e8f057c31f65f3f393d12edb89c3cef322f61e3a216d_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Cook/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 30,  108 => 29,  102 => 28,  94 => 32,  92 => 28,  85 => 24,  78 => 19,  76 => 18,  66 => 11,  60 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 2,);
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
\t<div class=\"body\">
\t\t{{ receta.detalles }}
\t</div>
\t
\t<br><br><br>

\t<section class=\"previous-comments\">
\t\t<h3>Comentarios</h3>
\t\t{% include 'CookerCookingBundle:Comment:list.html.twig' with { 'comments': comments } %}
\t</section>

\t<section class=\"comments\" id=\"comments\">
\t
\t<h3 style=\"margin-top: 40px\">Añadir comentario</h3>
\t\t{{ render(controller( 'CookerCookingBundle:Comment:new', { 'receta_id': receta.id } )) }}
\t</section>
\t
\t</section>
\t{% block stylesheets %}
\t{{ parent() }}
\t<link href=\"{{ asset('css/blog.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
\t{% endblock %}

{% endblock %}
", "@CookerCooking/Cook/show.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\show.html.twig");
    }
}

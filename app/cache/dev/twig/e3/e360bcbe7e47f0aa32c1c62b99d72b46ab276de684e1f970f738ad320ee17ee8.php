<?php

/* CookerCookingBundle:Cook:show.html.twig */
class __TwigTemplate_8ca6a9bf2cfd899f272a1f5a7ed3296349a4af614bbbe29941a32600a4845d8a extends Twig_Template
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
        $__internal_34d5477063037d9acf3a2e9c42a80ffcf74ceef6412cff973451fafd92e3bed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d5477063037d9acf3a2e9c42a80ffcf74ceef6412cff973451fafd92e3bed1->enter($__internal_34d5477063037d9acf3a2e9c42a80ffcf74ceef6412cff973451fafd92e3bed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34d5477063037d9acf3a2e9c42a80ffcf74ceef6412cff973451fafd92e3bed1->leave($__internal_34d5477063037d9acf3a2e9c42a80ffcf74ceef6412cff973451fafd92e3bed1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e8fcac67b92d2f7fd99cc481122d5bbf13526177f0b104b75b19470e50ac9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8fcac67b92d2f7fd99cc481122d5bbf13526177f0b104b75b19470e50ac9a5->enter($__internal_4e8fcac67b92d2f7fd99cc481122d5bbf13526177f0b104b75b19470e50ac9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Detalles de la receta";
        
        $__internal_4e8fcac67b92d2f7fd99cc481122d5bbf13526177f0b104b75b19470e50ac9a5->leave($__internal_4e8fcac67b92d2f7fd99cc481122d5bbf13526177f0b104b75b19470e50ac9a5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9654b961cc047ceda465f5485e598033284657835a80ff4ef4b7ecc07ec0eb05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9654b961cc047ceda465f5485e598033284657835a80ff4ef4b7ecc07ec0eb05->enter($__internal_9654b961cc047ceda465f5485e598033284657835a80ff4ef4b7ecc07ec0eb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("Cooker:CookingBundle:Comment:list.html.twig", "CookerCookingBundle:Cook:show.html.twig", 18)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 19
        echo "\t</section>

\t<section class=\"comments\" id=\"comments\">
\t
\t<h3>Añadir comentario</h3>
\t\t";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("Cooker:CookingBundle:Comment:new", array("receta_id" => $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "id", array()))));
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
        
        $__internal_9654b961cc047ceda465f5485e598033284657835a80ff4ef4b7ecc07ec0eb05->leave($__internal_9654b961cc047ceda465f5485e598033284657835a80ff4ef4b7ecc07ec0eb05_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e05220080b3b5e0652f4986b4dfa7fbfb3ed9c731f2ecb6b46d85924c70b636b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05220080b3b5e0652f4986b4dfa7fbfb3ed9c731f2ecb6b46d85924c70b636b->enter($__internal_e05220080b3b5e0652f4986b4dfa7fbfb3ed9c731f2ecb6b46d85924c70b636b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        
        $__internal_e05220080b3b5e0652f4986b4dfa7fbfb3ed9c731f2ecb6b46d85924c70b636b->leave($__internal_e05220080b3b5e0652f4986b4dfa7fbfb3ed9c731f2ecb6b46d85924c70b636b_prof);

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
        return new Twig_Source("{# src/Cooker/CookBundle/Resources/views/Blog/show.html.twig #}
{% extends \"CookerCookingBundle::layout.html.twig\" %}
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
\t\t{% include 'Cooker:CookingBundle:Comment:list.html.twig' with { 'comments': comments } %}
\t</section>

\t<section class=\"comments\" id=\"comments\">
\t
\t<h3>Añadir comentario</h3>
\t\t{{ render(controller( 'Cooker:CookingBundle:Comment:new', { 'receta_id': receta.id } )) }}
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

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
        $__internal_720644a12f318845d7c217aa49ea6d2e307e69fc0052f7dd00418114633ef606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720644a12f318845d7c217aa49ea6d2e307e69fc0052f7dd00418114633ef606->enter($__internal_720644a12f318845d7c217aa49ea6d2e307e69fc0052f7dd00418114633ef606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_720644a12f318845d7c217aa49ea6d2e307e69fc0052f7dd00418114633ef606->leave($__internal_720644a12f318845d7c217aa49ea6d2e307e69fc0052f7dd00418114633ef606_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd9f7500f676f6983c02b604e9df8a257e4632a36228ac3b7306e617a47eb764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9f7500f676f6983c02b604e9df8a257e4632a36228ac3b7306e617a47eb764->enter($__internal_fd9f7500f676f6983c02b604e9df8a257e4632a36228ac3b7306e617a47eb764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Detalles de la receta";
        
        $__internal_fd9f7500f676f6983c02b604e9df8a257e4632a36228ac3b7306e617a47eb764->leave($__internal_fd9f7500f676f6983c02b604e9df8a257e4632a36228ac3b7306e617a47eb764_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3e3b7aed7f3adabe7ed819beb5c8612b0afeb609c5fa19203f941213594d055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e3b7aed7f3adabe7ed819beb5c8612b0afeb609c5fa19203f941213594d055->enter($__internal_c3e3b7aed7f3adabe7ed819beb5c8612b0afeb609c5fa19203f941213594d055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t<img class=\"imgGran\" src=\"/css/images/";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "id", array()), "html", null, true);
        echo ".jpg\" alt=\"d\" />
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
        
        $__internal_c3e3b7aed7f3adabe7ed819beb5c8612b0afeb609c5fa19203f941213594d055->leave($__internal_c3e3b7aed7f3adabe7ed819beb5c8612b0afeb609c5fa19203f941213594d055_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4df2e9a3fd5a74dbda07a7def4f4d1aa7ab3bd10d67d713ddf399d76804a225d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df2e9a3fd5a74dbda07a7def4f4d1aa7ab3bd10d67d713ddf399d76804a225d->enter($__internal_4df2e9a3fd5a74dbda07a7def4f4d1aa7ab3bd10d67d713ddf399d76804a225d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 33
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        
        $__internal_4df2e9a3fd5a74dbda07a7def4f4d1aa7ab3bd10d67d713ddf399d76804a225d->leave($__internal_4df2e9a3fd5a74dbda07a7def4f4d1aa7ab3bd10d67d713ddf399d76804a225d_prof);

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
        return array (  120 => 34,  115 => 33,  109 => 32,  101 => 36,  99 => 32,  92 => 28,  85 => 23,  83 => 22,  73 => 15,  65 => 10,  60 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 2,);
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
\t<img class=\"imgGran\" src=\"/css/images/{{receta.id}}.jpg\" alt=\"d\" />
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

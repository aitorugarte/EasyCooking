<?php

/* BloggerBlogBundle:Blog:show.html.twig */
class __TwigTemplate_ebfa0668e81bab5418abe78d0db771b2f67412bbf6203077f923bd71f441bb9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7694a019ab0aac91a2caeee47143af4a2de0c0c526a5bed840f4c96ae2e3b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7694a019ab0aac91a2caeee47143af4a2de0c0c526a5bed840f4c96ae2e3b68->enter($__internal_f7694a019ab0aac91a2caeee47143af4a2de0c0c526a5bed840f4c96ae2e3b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7694a019ab0aac91a2caeee47143af4a2de0c0c526a5bed840f4c96ae2e3b68->leave($__internal_f7694a019ab0aac91a2caeee47143af4a2de0c0c526a5bed840f4c96ae2e3b68_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c6476fc41713d27509542d0af29e77298afd77a40c6acc786bdc67e6eaba95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6476fc41713d27509542d0af29e77298afd77a40c6acc786bdc67e6eaba95d->enter($__internal_1c6476fc41713d27509542d0af29e77298afd77a40c6acc786bdc67e6eaba95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Detalles de la receta";
        
        $__internal_1c6476fc41713d27509542d0af29e77298afd77a40c6acc786bdc67e6eaba95d->leave($__internal_1c6476fc41713d27509542d0af29e77298afd77a40c6acc786bdc67e6eaba95d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce8a2120cb1e9d486c5af8af6cc9252aa6fcc2e2849be0e3f5cbbe0501f9b27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8a2120cb1e9d486c5af8af6cc9252aa6fcc2e2849be0e3f5cbbe0501f9b27f->enter($__internal_ce8a2120cb1e9d486c5af8af6cc9252aa6fcc2e2849be0e3f5cbbe0501f9b27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("BloggerBlogBundle:Comment:list.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 18)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 19
        echo "\t</section>

\t<section class=\"comments\" id=\"comments\">
\t
\t<h3>Añadir comentario</h3>
\t\t";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("BloggerBlogBundle:Comment:new", array("receta_id" => $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "id", array()))));
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
        
        $__internal_ce8a2120cb1e9d486c5af8af6cc9252aa6fcc2e2849be0e3f5cbbe0501f9b27f->leave($__internal_ce8a2120cb1e9d486c5af8af6cc9252aa6fcc2e2849be0e3f5cbbe0501f9b27f_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a742f9172a37165a837c40c2770200698a6627d0aea4380d272624810745a25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a742f9172a37165a837c40c2770200698a6627d0aea4380d272624810745a25b->enter($__internal_a742f9172a37165a837c40c2770200698a6627d0aea4380d272624810745a25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        
        $__internal_a742f9172a37165a837c40c2770200698a6627d0aea4380d272624810745a25b->leave($__internal_a742f9172a37165a837c40c2770200698a6627d0aea4380d272624810745a25b_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Blog:show.html.twig";
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
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Blog/show.html.twig #}
{% extends \"BloggerBlogBundle::layout.html.twig\" %}
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
\t\t{% include 'BloggerBlogBundle:Comment:list.html.twig' with { 'comments': comments } %}
\t</section>

\t<section class=\"comments\" id=\"comments\">
\t
\t<h3>Añadir comentario</h3>
\t\t{{ render(controller( 'BloggerBlogBundle:Comment:new', { 'receta_id': receta.id } )) }}
\t</section>
\t
\t</section>
\t{% block stylesheets %}
\t{{ parent() }}
\t<link href=\"{{ asset('css/blog.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
\t{% endblock %}

{% endblock %}
", "BloggerBlogBundle:Blog:show.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle\\Resources\\views\\Blog\\show.html.twig");
    }
}

<?php

/* @BloggerBlog/Blog/show.html.twig */
class __TwigTemplate_b78a933120368914fccf2711879fde98719a07a9146039e05592373da5767153 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "@BloggerBlog/Blog/show.html.twig", 2);
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
        $__internal_2ed4d9ec352768399ca6c57acf8fdf4fa03a10125cd800f888a4e0ac428c3771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed4d9ec352768399ca6c57acf8fdf4fa03a10125cd800f888a4e0ac428c3771->enter($__internal_2ed4d9ec352768399ca6c57acf8fdf4fa03a10125cd800f888a4e0ac428c3771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Blog/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ed4d9ec352768399ca6c57acf8fdf4fa03a10125cd800f888a4e0ac428c3771->leave($__internal_2ed4d9ec352768399ca6c57acf8fdf4fa03a10125cd800f888a4e0ac428c3771_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ec64e538f857a6548b887187097fb9659dbb5033e2940194c45103f30f5a234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec64e538f857a6548b887187097fb9659dbb5033e2940194c45103f30f5a234->enter($__internal_7ec64e538f857a6548b887187097fb9659dbb5033e2940194c45103f30f5a234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Detalles de la receta";
        
        $__internal_7ec64e538f857a6548b887187097fb9659dbb5033e2940194c45103f30f5a234->leave($__internal_7ec64e538f857a6548b887187097fb9659dbb5033e2940194c45103f30f5a234_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3aee9bb629922290e89f4d6c9db07cf7b0dd5d5f4e849efc33c46cb8b680f8f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aee9bb629922290e89f4d6c9db07cf7b0dd5d5f4e849efc33c46cb8b680f8f5->enter($__internal_3aee9bb629922290e89f4d6c9db07cf7b0dd5d5f4e849efc33c46cb8b680f8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t</div>\t\t
\t<section class=\"comments\" id=\"comments\">
\t<h3>Añadir comentario</h3>
\t\t";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("BloggerBlogBundle:Comment:new", array("receta_id" => $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "id", array()))));
        echo "
\t</section>
\t<section class=\"previous-comments\">
\t\t<h3>Comentarios</h3>
\t\t";
        // line 19
        $this->loadTemplate("BloggerBlogBundle:Comment:list.html.twig", "@BloggerBlog/Blog/show.html.twig", 19)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 20
        echo "\t</section>
\t</section>
\t";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
";
        
        $__internal_3aee9bb629922290e89f4d6c9db07cf7b0dd5d5f4e849efc33c46cb8b680f8f5->leave($__internal_3aee9bb629922290e89f4d6c9db07cf7b0dd5d5f4e849efc33c46cb8b680f8f5_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c5fe59b9e0f1540b409a26ccd81a92597ec3a4536aec76ee7d136b77e31497ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5fe59b9e0f1540b409a26ccd81a92597ec3a4536aec76ee7d136b77e31497ce->enter($__internal_c5fe59b9e0f1540b409a26ccd81a92597ec3a4536aec76ee7d136b77e31497ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        
        $__internal_c5fe59b9e0f1540b409a26ccd81a92597ec3a4536aec76ee7d136b77e31497ce->leave($__internal_c5fe59b9e0f1540b409a26ccd81a92597ec3a4536aec76ee7d136b77e31497ce_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 24,  102 => 23,  96 => 22,  88 => 26,  86 => 22,  82 => 20,  80 => 19,  73 => 15,  66 => 11,  60 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 2,);
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
\t</div>\t\t
\t<section class=\"comments\" id=\"comments\">
\t<h3>Añadir comentario</h3>
\t\t{{ render(controller( 'BloggerBlogBundle:Comment:new', { 'receta_id': receta.id } )) }}
\t</section>
\t<section class=\"previous-comments\">
\t\t<h3>Comentarios</h3>
\t\t{% include 'BloggerBlogBundle:Comment:list.html.twig' with { 'comments': comments } %}
\t</section>
\t</section>
\t{% block stylesheets %}
\t{{ parent() }}
\t<link href=\"{{ asset('css/blog.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
\t{% endblock %}

{% endblock %}
", "@BloggerBlog/Blog/show.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle\\Resources\\views\\Blog\\show.html.twig");
    }
}

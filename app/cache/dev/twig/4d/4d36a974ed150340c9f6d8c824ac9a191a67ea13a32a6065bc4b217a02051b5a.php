<?php

/* @BloggerBlog/Comment/create.html.twig */
class __TwigTemplate_6d11d60d6766ed7436ebfdb9962196a7cc6967c4b0474e484b7859c082960a33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "@BloggerBlog/Comment/create.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cd2a72cb06c200194ccd88e28bb8527f410da5fe63045d5c8de17d96d1eb04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd2a72cb06c200194ccd88e28bb8527f410da5fe63045d5c8de17d96d1eb04f->enter($__internal_7cd2a72cb06c200194ccd88e28bb8527f410da5fe63045d5c8de17d96d1eb04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Comment/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cd2a72cb06c200194ccd88e28bb8527f410da5fe63045d5c8de17d96d1eb04f->leave($__internal_7cd2a72cb06c200194ccd88e28bb8527f410da5fe63045d5c8de17d96d1eb04f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c5604ec25c086345ebf9fa0a1199d43c692a67b10fa1026fd630a624260b59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5604ec25c086345ebf9fa0a1199d43c692a67b10fa1026fd630a624260b59a->enter($__internal_3c5604ec25c086345ebf9fa0a1199d43c692a67b10fa1026fd630a624260b59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_3c5604ec25c086345ebf9fa0a1199d43c692a67b10fa1026fd630a624260b59a->leave($__internal_3c5604ec25c086345ebf9fa0a1199d43c692a67b10fa1026fd630a624260b59a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba373cfee16e29902ff73fd1555b6d81e3a7b3798268f064b258803f17db2713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba373cfee16e29902ff73fd1555b6d81e3a7b3798268f064b258803f17db2713->enter($__internal_ba373cfee16e29902ff73fd1555b6d81e3a7b3798268f064b258803f17db2713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al post \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "post", array()), "title", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("BloggerBlogBundle:Comment:form.html.twig", "@BloggerBlog/Comment/create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_ba373cfee16e29902ff73fd1555b6d81e3a7b3798268f064b258803f17db2713->leave($__internal_ba373cfee16e29902ff73fd1555b6d81e3a7b3798268f064b258803f17db2713_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Comment/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  53 => 8,  47 => 7,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Comment/create.html.twig #}

{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}Añadir comentario{% endblock%}

{% block body %}
    <h1>Añadir un comentario al post \"{{ comment.post.title }}\"</h1>
    {% include 'BloggerBlogBundle:Comment:form.html.twig' with { 'form': form } %}
{% endblock %}
", "@BloggerBlog/Comment/create.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle\\Resources\\views\\Comment\\create.html.twig");
    }
}

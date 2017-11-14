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
        $__internal_5638600c23ef458d178be6d5583aa0e97d298ece987756b0713f824347ea231f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5638600c23ef458d178be6d5583aa0e97d298ece987756b0713f824347ea231f->enter($__internal_5638600c23ef458d178be6d5583aa0e97d298ece987756b0713f824347ea231f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Comment/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5638600c23ef458d178be6d5583aa0e97d298ece987756b0713f824347ea231f->leave($__internal_5638600c23ef458d178be6d5583aa0e97d298ece987756b0713f824347ea231f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d72b50a20e52d15bb1d05f25e20c0243f5d9021c9c53c8f9be71b9a1db0ae53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72b50a20e52d15bb1d05f25e20c0243f5d9021c9c53c8f9be71b9a1db0ae53c->enter($__internal_d72b50a20e52d15bb1d05f25e20c0243f5d9021c9c53c8f9be71b9a1db0ae53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_d72b50a20e52d15bb1d05f25e20c0243f5d9021c9c53c8f9be71b9a1db0ae53c->leave($__internal_d72b50a20e52d15bb1d05f25e20c0243f5d9021c9c53c8f9be71b9a1db0ae53c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_392ff60512511e20643d8eb4da65a50fb387fcfce4485bcc7de782e4ec4deb0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392ff60512511e20643d8eb4da65a50fb387fcfce4485bcc7de782e4ec4deb0e->enter($__internal_392ff60512511e20643d8eb4da65a50fb387fcfce4485bcc7de782e4ec4deb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario a la receta \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "receta", array()), "nombre", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("BloggerBlogBundle:Comment:form.html.twig", "@BloggerBlog/Comment/create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_392ff60512511e20643d8eb4da65a50fb387fcfce4485bcc7de782e4ec4deb0e->leave($__internal_392ff60512511e20643d8eb4da65a50fb387fcfce4485bcc7de782e4ec4deb0e_prof);

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
    <h1>Añadir un comentario a la receta \"{{ comment.receta.nombre }}\"</h1>
    {% include 'BloggerBlogBundle:Comment:form.html.twig' with { 'form': form } %}
{% endblock %}
", "@BloggerBlog/Comment/create.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle\\Resources\\views\\Comment\\create.html.twig");
    }
}

<?php

/* BloggerBlogBundle:Comment:create.html.twig */
class __TwigTemplate_4b3474dd0e1ed0fe9127ce6364234ad746b24c842bebc3d1ff11b06565f824da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Comment:create.html.twig", 3);
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
        $__internal_9dcb7cd5a3ec6af61d243a7c7bb3fb885a4a707274a28cf53d2b0bbdf54254b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dcb7cd5a3ec6af61d243a7c7bb3fb885a4a707274a28cf53d2b0bbdf54254b4->enter($__internal_9dcb7cd5a3ec6af61d243a7c7bb3fb885a4a707274a28cf53d2b0bbdf54254b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dcb7cd5a3ec6af61d243a7c7bb3fb885a4a707274a28cf53d2b0bbdf54254b4->leave($__internal_9dcb7cd5a3ec6af61d243a7c7bb3fb885a4a707274a28cf53d2b0bbdf54254b4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6f3e41598b7e6452ac55525af4a23c1f8203a16d5a2d49c063b993040d0b098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f3e41598b7e6452ac55525af4a23c1f8203a16d5a2d49c063b993040d0b098->enter($__internal_d6f3e41598b7e6452ac55525af4a23c1f8203a16d5a2d49c063b993040d0b098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_d6f3e41598b7e6452ac55525af4a23c1f8203a16d5a2d49c063b993040d0b098->leave($__internal_d6f3e41598b7e6452ac55525af4a23c1f8203a16d5a2d49c063b993040d0b098_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbc597e9b527eca516558abe4197b3913ec7007a5163810b3a2393585d165f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc597e9b527eca516558abe4197b3913ec7007a5163810b3a2393585d165f78->enter($__internal_cbc597e9b527eca516558abe4197b3913ec7007a5163810b3a2393585d165f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al post \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "post", array()), "title", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("BloggerBlogBundle:Comment:form.html.twig", "BloggerBlogBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_cbc597e9b527eca516558abe4197b3913ec7007a5163810b3a2393585d165f78->leave($__internal_cbc597e9b527eca516558abe4197b3913ec7007a5163810b3a2393585d165f78_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:create.html.twig";
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
", "BloggerBlogBundle:Comment:create.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle/Resources/views/Comment/create.html.twig");
    }
}

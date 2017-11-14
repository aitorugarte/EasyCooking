<?php

/* @BloggerBlog/Blog/contact.html.twig */
class __TwigTemplate_02ee3e50783f07b0105d8e840e49c7149ccfa069e35f9e666d2a4f6a9a6065f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "@BloggerBlog/Blog/contact.html.twig", 2);
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
        $__internal_5a2e6652f66f71cd331e400a6a0a3913e13a3591746b6ff6d21c7a94e37653a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2e6652f66f71cd331e400a6a0a3913e13a3591746b6ff6d21c7a94e37653a7->enter($__internal_5a2e6652f66f71cd331e400a6a0a3913e13a3591746b6ff6d21c7a94e37653a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Blog/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a2e6652f66f71cd331e400a6a0a3913e13a3591746b6ff6d21c7a94e37653a7->leave($__internal_5a2e6652f66f71cd331e400a6a0a3913e13a3591746b6ff6d21c7a94e37653a7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_814f593c51f0170a1d5dc17ada252bfb85ad9c20882cc5c420f6a6efd04ffc25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814f593c51f0170a1d5dc17ada252bfb85ad9c20882cc5c420f6a6efd04ffc25->enter($__internal_814f593c51f0170a1d5dc17ada252bfb85ad9c20882cc5c420f6a6efd04ffc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_814f593c51f0170a1d5dc17ada252bfb85ad9c20882cc5c420f6a6efd04ffc25->leave($__internal_814f593c51f0170a1d5dc17ada252bfb85ad9c20882cc5c420f6a6efd04ffc25_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d9c183330135cfbeefe83a62a44a7dbac634c929f47c0c31da45a08daedadf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9c183330135cfbeefe83a62a44a7dbac634c929f47c0c31da45a08daedadf7->enter($__internal_6d9c183330135cfbeefe83a62a44a7dbac634c929f47c0c31da45a08daedadf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contacta conmigo</h1>
    </header>

    <p>Puedes encontrarme en las siguientes redes sociales:</p>
\t<ul>
\t\t<li><a href=\"https://twitter.com/claorden\" target=\"_blank\">Twitter</a></li>
\t\t<li><a href=\"https://www.linkedin.com/in/claorden\" target=\"_blank\">LinkedIn</a></li>
\t</ul>
";
        
        $__internal_6d9c183330135cfbeefe83a62a44a7dbac634c929f47c0c31da45a08daedadf7->leave($__internal_6d9c183330135cfbeefe83a62a44a7dbac634c929f47c0c31da45a08daedadf7_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Blog/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Blog/contact.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}Contacto{% endblock%}

{% block body %}
    <header>
        <h1>Contacta conmigo</h1>
    </header>

    <p>Puedes encontrarme en las siguientes redes sociales:</p>
\t<ul>
\t\t<li><a href=\"https://twitter.com/claorden\" target=\"_blank\">Twitter</a></li>
\t\t<li><a href=\"https://www.linkedin.com/in/claorden\" target=\"_blank\">LinkedIn</a></li>
\t</ul>
{% endblock %}
", "@BloggerBlog/Blog/contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle\\Resources\\views\\Blog\\contact.html.twig");
    }
}

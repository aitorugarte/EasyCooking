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
        $__internal_c30be060d7e4aa7a06d576da8dd96a0bd92ddfda787167f30a93535df6344041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30be060d7e4aa7a06d576da8dd96a0bd92ddfda787167f30a93535df6344041->enter($__internal_c30be060d7e4aa7a06d576da8dd96a0bd92ddfda787167f30a93535df6344041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Blog/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c30be060d7e4aa7a06d576da8dd96a0bd92ddfda787167f30a93535df6344041->leave($__internal_c30be060d7e4aa7a06d576da8dd96a0bd92ddfda787167f30a93535df6344041_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdddde614fcd604150b5a8ccd28b01b5f4d4f5e877a801e4a1d76a06473fffe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdddde614fcd604150b5a8ccd28b01b5f4d4f5e877a801e4a1d76a06473fffe8->enter($__internal_cdddde614fcd604150b5a8ccd28b01b5f4d4f5e877a801e4a1d76a06473fffe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_cdddde614fcd604150b5a8ccd28b01b5f4d4f5e877a801e4a1d76a06473fffe8->leave($__internal_cdddde614fcd604150b5a8ccd28b01b5f4d4f5e877a801e4a1d76a06473fffe8_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f00d8cfd83b54255914efc544a79bd4c8217433295f479f1804a7d912b0f9b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00d8cfd83b54255914efc544a79bd4c8217433295f479f1804a7d912b0f9b43->enter($__internal_f00d8cfd83b54255914efc544a79bd4c8217433295f479f1804a7d912b0f9b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f00d8cfd83b54255914efc544a79bd4c8217433295f479f1804a7d912b0f9b43->leave($__internal_f00d8cfd83b54255914efc544a79bd4c8217433295f479f1804a7d912b0f9b43_prof);

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

{% block title %}Contact{% endblock%}

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

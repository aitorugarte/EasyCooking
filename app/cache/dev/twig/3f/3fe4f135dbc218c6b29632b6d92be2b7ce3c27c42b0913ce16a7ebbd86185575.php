<?php

/* BloggerBlogBundle:Blog:contact.html.twig */
class __TwigTemplate_02cf3ecd1b5ce341bcee68b485fdc8a68daf43106596ea00244f305d95a564f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Blog:contact.html.twig", 2);
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
        $__internal_4ce7dcd08cfebbf69df48dd1b7eb601b6ed70b2b8e2b0a66ee4299373bc5f255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce7dcd08cfebbf69df48dd1b7eb601b6ed70b2b8e2b0a66ee4299373bc5f255->enter($__internal_4ce7dcd08cfebbf69df48dd1b7eb601b6ed70b2b8e2b0a66ee4299373bc5f255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ce7dcd08cfebbf69df48dd1b7eb601b6ed70b2b8e2b0a66ee4299373bc5f255->leave($__internal_4ce7dcd08cfebbf69df48dd1b7eb601b6ed70b2b8e2b0a66ee4299373bc5f255_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e647cc3218b46aaee35299a825a51880ff4329d221d9221133786062d933b1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e647cc3218b46aaee35299a825a51880ff4329d221d9221133786062d933b1f4->enter($__internal_e647cc3218b46aaee35299a825a51880ff4329d221d9221133786062d933b1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_e647cc3218b46aaee35299a825a51880ff4329d221d9221133786062d933b1f4->leave($__internal_e647cc3218b46aaee35299a825a51880ff4329d221d9221133786062d933b1f4_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b18f5f2382b0cc5a082394f8ac245f7c096031bf258786f287815489b396ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b18f5f2382b0cc5a082394f8ac245f7c096031bf258786f287815489b396ef2->enter($__internal_9b18f5f2382b0cc5a082394f8ac245f7c096031bf258786f287815489b396ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9b18f5f2382b0cc5a082394f8ac245f7c096031bf258786f287815489b396ef2->leave($__internal_9b18f5f2382b0cc5a082394f8ac245f7c096031bf258786f287815489b396ef2_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Blog:contact.html.twig";
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
", "BloggerBlogBundle:Blog:contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle/Resources/views/Blog/contact.html.twig");
    }
}

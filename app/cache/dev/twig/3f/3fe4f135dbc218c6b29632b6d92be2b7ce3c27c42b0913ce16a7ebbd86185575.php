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
        $__internal_4d93ba1d47a6fe8f8654eddbe13a28bbcda5acbe6707a16c1586324a8ba7972a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d93ba1d47a6fe8f8654eddbe13a28bbcda5acbe6707a16c1586324a8ba7972a->enter($__internal_4d93ba1d47a6fe8f8654eddbe13a28bbcda5acbe6707a16c1586324a8ba7972a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d93ba1d47a6fe8f8654eddbe13a28bbcda5acbe6707a16c1586324a8ba7972a->leave($__internal_4d93ba1d47a6fe8f8654eddbe13a28bbcda5acbe6707a16c1586324a8ba7972a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e6b9e2702660f9b7237c7bb17520a508f6b6ca985a0c5104e58be95634fbaee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6b9e2702660f9b7237c7bb17520a508f6b6ca985a0c5104e58be95634fbaee->enter($__internal_9e6b9e2702660f9b7237c7bb17520a508f6b6ca985a0c5104e58be95634fbaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_9e6b9e2702660f9b7237c7bb17520a508f6b6ca985a0c5104e58be95634fbaee->leave($__internal_9e6b9e2702660f9b7237c7bb17520a508f6b6ca985a0c5104e58be95634fbaee_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a45b15c8113cb6ba5b79fe46de22fc927b6127280c5c19b5c0913da9993e696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a45b15c8113cb6ba5b79fe46de22fc927b6127280c5c19b5c0913da9993e696->enter($__internal_9a45b15c8113cb6ba5b79fe46de22fc927b6127280c5c19b5c0913da9993e696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9a45b15c8113cb6ba5b79fe46de22fc927b6127280c5c19b5c0913da9993e696->leave($__internal_9a45b15c8113cb6ba5b79fe46de22fc927b6127280c5c19b5c0913da9993e696_prof);

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
", "BloggerBlogBundle:Blog:contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle/Resources/views/Blog/contact.html.twig");
    }
}

<?php

/* BloggerBlogBundle:Blog:contact.html.twig */
class __TwigTemplate_476e75c61bee5be387fbd0c4f5aac24466585cf6e9b3d54123a7dbd88f6cc9e5 extends Twig_Template
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
        $__internal_f60b9e2117b81fdcab38ed2ca76fd801166d77adcacfa117c0f2056e793fe7b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60b9e2117b81fdcab38ed2ca76fd801166d77adcacfa117c0f2056e793fe7b2->enter($__internal_f60b9e2117b81fdcab38ed2ca76fd801166d77adcacfa117c0f2056e793fe7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f60b9e2117b81fdcab38ed2ca76fd801166d77adcacfa117c0f2056e793fe7b2->leave($__internal_f60b9e2117b81fdcab38ed2ca76fd801166d77adcacfa117c0f2056e793fe7b2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b2e81ab7305b17760cad410dfc28d7ee4052817c311af1845b010f600e0e7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2e81ab7305b17760cad410dfc28d7ee4052817c311af1845b010f600e0e7be->enter($__internal_1b2e81ab7305b17760cad410dfc28d7ee4052817c311af1845b010f600e0e7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_1b2e81ab7305b17760cad410dfc28d7ee4052817c311af1845b010f600e0e7be->leave($__internal_1b2e81ab7305b17760cad410dfc28d7ee4052817c311af1845b010f600e0e7be_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6568ab840aefd2973ada9ef9db72500c5d87e2c65aa7af1e41a8a6a990ffe89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6568ab840aefd2973ada9ef9db72500c5d87e2c65aa7af1e41a8a6a990ffe89->enter($__internal_f6568ab840aefd2973ada9ef9db72500c5d87e2c65aa7af1e41a8a6a990ffe89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f6568ab840aefd2973ada9ef9db72500c5d87e2c65aa7af1e41a8a6a990ffe89->leave($__internal_f6568ab840aefd2973ada9ef9db72500c5d87e2c65aa7af1e41a8a6a990ffe89_prof);

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

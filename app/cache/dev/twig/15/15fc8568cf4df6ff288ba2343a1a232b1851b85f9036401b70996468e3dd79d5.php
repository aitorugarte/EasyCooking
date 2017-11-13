<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_aaf7677033ec9eccbb6b349853a28ab811eae624c91a39163da529b548c2423b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "BloggerBlogBundle::layout.html.twig", 2);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_190f2e3a5dc122d48beb4bb31f6fb80892608f71d3ad457ed80279da73c11730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190f2e3a5dc122d48beb4bb31f6fb80892608f71d3ad457ed80279da73c11730->enter($__internal_190f2e3a5dc122d48beb4bb31f6fb80892608f71d3ad457ed80279da73c11730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_190f2e3a5dc122d48beb4bb31f6fb80892608f71d3ad457ed80279da73c11730->leave($__internal_190f2e3a5dc122d48beb4bb31f6fb80892608f71d3ad457ed80279da73c11730_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0afccd72077a4c37aa7ed7f5960602719c6e6418365c108b1f65e9f95010d476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afccd72077a4c37aa7ed7f5960602719c6e6418365c108b1f65e9f95010d476->enter($__internal_0afccd72077a4c37aa7ed7f5960602719c6e6418365c108b1f65e9f95010d476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    Contenido de sidebar
";
        
        $__internal_0afccd72077a4c37aa7ed7f5960602719c6e6418365c108b1f65e9f95010d476->leave($__internal_0afccd72077a4c37aa7ed7f5960602719c6e6418365c108b1f65e9f95010d476_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}

{% block sidebar %}
    Contenido de sidebar
{% endblock %}
", "BloggerBlogBundle::layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle/Resources/views/layout.html.twig");
    }
}

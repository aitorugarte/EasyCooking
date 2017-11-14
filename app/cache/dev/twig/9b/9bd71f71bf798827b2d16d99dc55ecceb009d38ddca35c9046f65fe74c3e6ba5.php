<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_bb4a5a5a9f5acf72afeb0ab9e93865ee50fd77c69a93c371b5a62b911a0ce74e extends Twig_Template
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
        $__internal_60b7617375eaa81f875e5630b69ba480992a3e0916ebc0b88be4e894e3317322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b7617375eaa81f875e5630b69ba480992a3e0916ebc0b88be4e894e3317322->enter($__internal_60b7617375eaa81f875e5630b69ba480992a3e0916ebc0b88be4e894e3317322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60b7617375eaa81f875e5630b69ba480992a3e0916ebc0b88be4e894e3317322->leave($__internal_60b7617375eaa81f875e5630b69ba480992a3e0916ebc0b88be4e894e3317322_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9b1d59fea8a1f3ab85a5c480d0068d0ee02ccaf72347aa6eb0b824da2fda8428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1d59fea8a1f3ab85a5c480d0068d0ee02ccaf72347aa6eb0b824da2fda8428->enter($__internal_9b1d59fea8a1f3ab85a5c480d0068d0ee02ccaf72347aa6eb0b824da2fda8428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    ¿Qué ponemos aquí?
";
        
        $__internal_9b1d59fea8a1f3ab85a5c480d0068d0ee02ccaf72347aa6eb0b824da2fda8428->leave($__internal_9b1d59fea8a1f3ab85a5c480d0068d0ee02ccaf72347aa6eb0b824da2fda8428_prof);

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
    ¿Qué ponemos aquí?
{% endblock %}
", "BloggerBlogBundle::layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle/Resources/views/layout.html.twig");
    }
}

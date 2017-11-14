<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_9d37785d50f6957f831de8086bf5478a48ae5a8638c5c2c075354ff74f723250 extends Twig_Template
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
        $__internal_08b8448ce1cb92b4567a63ccd4518317e06a3afb03cb385c2ae96579e6bb6692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b8448ce1cb92b4567a63ccd4518317e06a3afb03cb385c2ae96579e6bb6692->enter($__internal_08b8448ce1cb92b4567a63ccd4518317e06a3afb03cb385c2ae96579e6bb6692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08b8448ce1cb92b4567a63ccd4518317e06a3afb03cb385c2ae96579e6bb6692->leave($__internal_08b8448ce1cb92b4567a63ccd4518317e06a3afb03cb385c2ae96579e6bb6692_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f347d5a4ca4c3377b7d3774af8ba349383487315eb12854890005c3f775eba1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f347d5a4ca4c3377b7d3774af8ba349383487315eb12854890005c3f775eba1d->enter($__internal_f347d5a4ca4c3377b7d3774af8ba349383487315eb12854890005c3f775eba1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    ¿Qué ponemos aquí?
";
        
        $__internal_f347d5a4ca4c3377b7d3774af8ba349383487315eb12854890005c3f775eba1d->leave($__internal_f347d5a4ca4c3377b7d3774af8ba349383487315eb12854890005c3f775eba1d_prof);

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
", "BloggerBlogBundle::layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle\\Resources\\views\\layout.html.twig");
    }
}

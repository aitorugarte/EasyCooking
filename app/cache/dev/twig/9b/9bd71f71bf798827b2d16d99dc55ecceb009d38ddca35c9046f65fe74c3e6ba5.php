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
        $__internal_526505ffef883dacd9221d2143a2a932f3b199369f782558627119069e1e64d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526505ffef883dacd9221d2143a2a932f3b199369f782558627119069e1e64d0->enter($__internal_526505ffef883dacd9221d2143a2a932f3b199369f782558627119069e1e64d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_526505ffef883dacd9221d2143a2a932f3b199369f782558627119069e1e64d0->leave($__internal_526505ffef883dacd9221d2143a2a932f3b199369f782558627119069e1e64d0_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b43fa60ab94a7c157bbd33b05e69750267dca6d18102a5024077cbd16b7bbf58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43fa60ab94a7c157bbd33b05e69750267dca6d18102a5024077cbd16b7bbf58->enter($__internal_b43fa60ab94a7c157bbd33b05e69750267dca6d18102a5024077cbd16b7bbf58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    Contenido de sidebar
";
        
        $__internal_b43fa60ab94a7c157bbd33b05e69750267dca6d18102a5024077cbd16b7bbf58->leave($__internal_b43fa60ab94a7c157bbd33b05e69750267dca6d18102a5024077cbd16b7bbf58_prof);

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

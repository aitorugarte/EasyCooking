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
        $__internal_86604440dca9cd78b62ab25cd10aed72bb8f336dadcbeff93f141020cd0515b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86604440dca9cd78b62ab25cd10aed72bb8f336dadcbeff93f141020cd0515b0->enter($__internal_86604440dca9cd78b62ab25cd10aed72bb8f336dadcbeff93f141020cd0515b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86604440dca9cd78b62ab25cd10aed72bb8f336dadcbeff93f141020cd0515b0->leave($__internal_86604440dca9cd78b62ab25cd10aed72bb8f336dadcbeff93f141020cd0515b0_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e57c9fde07062679bcee03e4a2bc5de23ad1ba866f58da4e556383eed1561017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57c9fde07062679bcee03e4a2bc5de23ad1ba866f58da4e556383eed1561017->enter($__internal_e57c9fde07062679bcee03e4a2bc5de23ad1ba866f58da4e556383eed1561017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    Contenido de sidebar
";
        
        $__internal_e57c9fde07062679bcee03e4a2bc5de23ad1ba866f58da4e556383eed1561017->leave($__internal_e57c9fde07062679bcee03e4a2bc5de23ad1ba866f58da4e556383eed1561017_prof);

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
", "BloggerBlogBundle::layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle\\Resources\\views\\layout.html.twig");
    }
}

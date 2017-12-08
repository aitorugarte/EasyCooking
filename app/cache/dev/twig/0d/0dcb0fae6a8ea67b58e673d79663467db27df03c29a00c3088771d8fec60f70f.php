<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d02573ad3e1931d251f7b5eb8a85540b2b7bce5f05c854983ca14b6afaa602c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f840567834f9cf0e3730d05518beef0967a9b29a66b231cdbd09f048b73f00b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f840567834f9cf0e3730d05518beef0967a9b29a66b231cdbd09f048b73f00b3->enter($__internal_f840567834f9cf0e3730d05518beef0967a9b29a66b231cdbd09f048b73f00b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f840567834f9cf0e3730d05518beef0967a9b29a66b231cdbd09f048b73f00b3->leave($__internal_f840567834f9cf0e3730d05518beef0967a9b29a66b231cdbd09f048b73f00b3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ee74a5b7d21aa24da08642e7e93593c1890185b56aa6747716f640273cd6d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee74a5b7d21aa24da08642e7e93593c1890185b56aa6747716f640273cd6d1d->enter($__internal_5ee74a5b7d21aa24da08642e7e93593c1890185b56aa6747716f640273cd6d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ee74a5b7d21aa24da08642e7e93593c1890185b56aa6747716f640273cd6d1d->leave($__internal_5ee74a5b7d21aa24da08642e7e93593c1890185b56aa6747716f640273cd6d1d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_59a5d2f294fbf568d2e5c543fc977c581e9c7978100b2c7dcde8791fac3bf40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a5d2f294fbf568d2e5c543fc977c581e9c7978100b2c7dcde8791fac3bf40c->enter($__internal_59a5d2f294fbf568d2e5c543fc977c581e9c7978100b2c7dcde8791fac3bf40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_59a5d2f294fbf568d2e5c543fc977c581e9c7978100b2c7dcde8791fac3bf40c->leave($__internal_59a5d2f294fbf568d2e5c543fc977c581e9c7978100b2c7dcde8791fac3bf40c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94e13aef9fbf0720224a6a43c8666e010acfb4c62a27ef85989d71bb4ae9208a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e13aef9fbf0720224a6a43c8666e010acfb4c62a27ef85989d71bb4ae9208a->enter($__internal_94e13aef9fbf0720224a6a43c8666e010acfb4c62a27ef85989d71bb4ae9208a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_94e13aef9fbf0720224a6a43c8666e010acfb4c62a27ef85989d71bb4ae9208a->leave($__internal_94e13aef9fbf0720224a6a43c8666e010acfb4c62a27ef85989d71bb4ae9208a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

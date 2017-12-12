<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8c79dc4721822c3da769f6e883fd81b1d7f92d660e13d05deff15f545a258dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_d5d394f2894ecfcf309c732b30cbe8d4e63f7ae6434fdb045a6659d30d8a9f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d394f2894ecfcf309c732b30cbe8d4e63f7ae6434fdb045a6659d30d8a9f35->enter($__internal_d5d394f2894ecfcf309c732b30cbe8d4e63f7ae6434fdb045a6659d30d8a9f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5d394f2894ecfcf309c732b30cbe8d4e63f7ae6434fdb045a6659d30d8a9f35->leave($__internal_d5d394f2894ecfcf309c732b30cbe8d4e63f7ae6434fdb045a6659d30d8a9f35_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_79c60a78ee7d9c4d70c99ed5dff213b72dc37fd956d83ca3ad20c81af965e573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c60a78ee7d9c4d70c99ed5dff213b72dc37fd956d83ca3ad20c81af965e573->enter($__internal_79c60a78ee7d9c4d70c99ed5dff213b72dc37fd956d83ca3ad20c81af965e573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_79c60a78ee7d9c4d70c99ed5dff213b72dc37fd956d83ca3ad20c81af965e573->leave($__internal_79c60a78ee7d9c4d70c99ed5dff213b72dc37fd956d83ca3ad20c81af965e573_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_80a17cf7f107ee6a2fa30699b678a88ebc007e51a7b4a39e7bc3e7e5a7dce20b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a17cf7f107ee6a2fa30699b678a88ebc007e51a7b4a39e7bc3e7e5a7dce20b->enter($__internal_80a17cf7f107ee6a2fa30699b678a88ebc007e51a7b4a39e7bc3e7e5a7dce20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_80a17cf7f107ee6a2fa30699b678a88ebc007e51a7b4a39e7bc3e7e5a7dce20b->leave($__internal_80a17cf7f107ee6a2fa30699b678a88ebc007e51a7b4a39e7bc3e7e5a7dce20b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4daad704556d811862eadab3427ab2c25a71073da7a8de9e791a3a98755ea42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4daad704556d811862eadab3427ab2c25a71073da7a8de9e791a3a98755ea42b->enter($__internal_4daad704556d811862eadab3427ab2c25a71073da7a8de9e791a3a98755ea42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4daad704556d811862eadab3427ab2c25a71073da7a8de9e791a3a98755ea42b->leave($__internal_4daad704556d811862eadab3427ab2c25a71073da7a8de9e791a3a98755ea42b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

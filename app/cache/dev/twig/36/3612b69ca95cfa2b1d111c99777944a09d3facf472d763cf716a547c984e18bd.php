<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b6131bd90daccf5af172ed490836fefa13892b9078781615be9d963a3411b4b0 extends Twig_Template
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
        $__internal_06d968c43da58d9e09a9999ef0bdb534eb97e8075b659514663af03fcd691c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d968c43da58d9e09a9999ef0bdb534eb97e8075b659514663af03fcd691c35->enter($__internal_06d968c43da58d9e09a9999ef0bdb534eb97e8075b659514663af03fcd691c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06d968c43da58d9e09a9999ef0bdb534eb97e8075b659514663af03fcd691c35->leave($__internal_06d968c43da58d9e09a9999ef0bdb534eb97e8075b659514663af03fcd691c35_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc6e4725a8a866626b02861ffe0de98e5dae5460d646737436277d6c39520103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6e4725a8a866626b02861ffe0de98e5dae5460d646737436277d6c39520103->enter($__internal_bc6e4725a8a866626b02861ffe0de98e5dae5460d646737436277d6c39520103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bc6e4725a8a866626b02861ffe0de98e5dae5460d646737436277d6c39520103->leave($__internal_bc6e4725a8a866626b02861ffe0de98e5dae5460d646737436277d6c39520103_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36707834c13bbe8926e1c5e0f37f0ed6b89e4b8a8a180ce0fb8d5aa438d7f5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36707834c13bbe8926e1c5e0f37f0ed6b89e4b8a8a180ce0fb8d5aa438d7f5a9->enter($__internal_36707834c13bbe8926e1c5e0f37f0ed6b89e4b8a8a180ce0fb8d5aa438d7f5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_36707834c13bbe8926e1c5e0f37f0ed6b89e4b8a8a180ce0fb8d5aa438d7f5a9->leave($__internal_36707834c13bbe8926e1c5e0f37f0ed6b89e4b8a8a180ce0fb8d5aa438d7f5a9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d08fbcbbab0ebd89ad12a5a7d60d8400ef1ad1b9e5073a2fc9cc36838f4e88a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08fbcbbab0ebd89ad12a5a7d60d8400ef1ad1b9e5073a2fc9cc36838f4e88a6->enter($__internal_d08fbcbbab0ebd89ad12a5a7d60d8400ef1ad1b9e5073a2fc9cc36838f4e88a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d08fbcbbab0ebd89ad12a5a7d60d8400ef1ad1b9e5073a2fc9cc36838f4e88a6->leave($__internal_d08fbcbbab0ebd89ad12a5a7d60d8400ef1ad1b9e5073a2fc9cc36838f4e88a6_prof);

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

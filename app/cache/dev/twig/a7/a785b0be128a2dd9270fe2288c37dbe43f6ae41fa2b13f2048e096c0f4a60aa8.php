<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e4d70fa4b26812d0270b58d85759914e4f58f09509c07ef3d8768d1fff4610e8 extends Twig_Template
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
        $__internal_99773231be654eb0f2324122cd8e2867ccbd1e091bf2b7a1e00bd2c4de1969a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99773231be654eb0f2324122cd8e2867ccbd1e091bf2b7a1e00bd2c4de1969a4->enter($__internal_99773231be654eb0f2324122cd8e2867ccbd1e091bf2b7a1e00bd2c4de1969a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99773231be654eb0f2324122cd8e2867ccbd1e091bf2b7a1e00bd2c4de1969a4->leave($__internal_99773231be654eb0f2324122cd8e2867ccbd1e091bf2b7a1e00bd2c4de1969a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc10163f63f969aabf06a6141a7643e567ef98038325f05f5f42dadc7498f81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc10163f63f969aabf06a6141a7643e567ef98038325f05f5f42dadc7498f81d->enter($__internal_cc10163f63f969aabf06a6141a7643e567ef98038325f05f5f42dadc7498f81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc10163f63f969aabf06a6141a7643e567ef98038325f05f5f42dadc7498f81d->leave($__internal_cc10163f63f969aabf06a6141a7643e567ef98038325f05f5f42dadc7498f81d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8959e050787005783dbf8bdbd93bce389ce51cd304b320801b92ef8d4d3b1cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8959e050787005783dbf8bdbd93bce389ce51cd304b320801b92ef8d4d3b1cd7->enter($__internal_8959e050787005783dbf8bdbd93bce389ce51cd304b320801b92ef8d4d3b1cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8959e050787005783dbf8bdbd93bce389ce51cd304b320801b92ef8d4d3b1cd7->leave($__internal_8959e050787005783dbf8bdbd93bce389ce51cd304b320801b92ef8d4d3b1cd7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c55bfdfb97c0ef0e533f0518208fe0769ec96dc7357d70673f57a171d2463618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55bfdfb97c0ef0e533f0518208fe0769ec96dc7357d70673f57a171d2463618->enter($__internal_c55bfdfb97c0ef0e533f0518208fe0769ec96dc7357d70673f57a171d2463618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c55bfdfb97c0ef0e533f0518208fe0769ec96dc7357d70673f57a171d2463618->leave($__internal_c55bfdfb97c0ef0e533f0518208fe0769ec96dc7357d70673f57a171d2463618_prof);

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

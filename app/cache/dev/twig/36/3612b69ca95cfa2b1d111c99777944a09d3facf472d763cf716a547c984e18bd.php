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
        $__internal_1ab7b07705cfce8d8b1850ec46ea7a559546a3d9e5ff60ba91e545fe24f27412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab7b07705cfce8d8b1850ec46ea7a559546a3d9e5ff60ba91e545fe24f27412->enter($__internal_1ab7b07705cfce8d8b1850ec46ea7a559546a3d9e5ff60ba91e545fe24f27412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ab7b07705cfce8d8b1850ec46ea7a559546a3d9e5ff60ba91e545fe24f27412->leave($__internal_1ab7b07705cfce8d8b1850ec46ea7a559546a3d9e5ff60ba91e545fe24f27412_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e730035e4e56a6e62b1377adde2ef2a09a2a60137d3bc63aff3813a2d3d31d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e730035e4e56a6e62b1377adde2ef2a09a2a60137d3bc63aff3813a2d3d31d74->enter($__internal_e730035e4e56a6e62b1377adde2ef2a09a2a60137d3bc63aff3813a2d3d31d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e730035e4e56a6e62b1377adde2ef2a09a2a60137d3bc63aff3813a2d3d31d74->leave($__internal_e730035e4e56a6e62b1377adde2ef2a09a2a60137d3bc63aff3813a2d3d31d74_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9177c2a7c98399aa6e1280a1afd7e598e9c730e386bf4ce2e64dce9932c70590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9177c2a7c98399aa6e1280a1afd7e598e9c730e386bf4ce2e64dce9932c70590->enter($__internal_9177c2a7c98399aa6e1280a1afd7e598e9c730e386bf4ce2e64dce9932c70590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9177c2a7c98399aa6e1280a1afd7e598e9c730e386bf4ce2e64dce9932c70590->leave($__internal_9177c2a7c98399aa6e1280a1afd7e598e9c730e386bf4ce2e64dce9932c70590_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_65c178d73b81665b5da7a23a0afa0c4e4f1e5da735bec9d49756d0fbf15599e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c178d73b81665b5da7a23a0afa0c4e4f1e5da735bec9d49756d0fbf15599e8->enter($__internal_65c178d73b81665b5da7a23a0afa0c4e4f1e5da735bec9d49756d0fbf15599e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_65c178d73b81665b5da7a23a0afa0c4e4f1e5da735bec9d49756d0fbf15599e8->leave($__internal_65c178d73b81665b5da7a23a0afa0c4e4f1e5da735bec9d49756d0fbf15599e8_prof);

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

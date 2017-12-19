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
        $__internal_a4ca4ca29a74bc63c61528ead66f183f5f8728f2e8b0276e97651eeb2000c074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ca4ca29a74bc63c61528ead66f183f5f8728f2e8b0276e97651eeb2000c074->enter($__internal_a4ca4ca29a74bc63c61528ead66f183f5f8728f2e8b0276e97651eeb2000c074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4ca4ca29a74bc63c61528ead66f183f5f8728f2e8b0276e97651eeb2000c074->leave($__internal_a4ca4ca29a74bc63c61528ead66f183f5f8728f2e8b0276e97651eeb2000c074_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_31d43753dc810c5c038198b6d32aa987830fef5407509d664c60dc387461b8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d43753dc810c5c038198b6d32aa987830fef5407509d664c60dc387461b8fb->enter($__internal_31d43753dc810c5c038198b6d32aa987830fef5407509d664c60dc387461b8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_31d43753dc810c5c038198b6d32aa987830fef5407509d664c60dc387461b8fb->leave($__internal_31d43753dc810c5c038198b6d32aa987830fef5407509d664c60dc387461b8fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_abf45d731ee2104f081dbe0195ddfd8efeef0a70e5901c57b3ac19b0cf8aa039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf45d731ee2104f081dbe0195ddfd8efeef0a70e5901c57b3ac19b0cf8aa039->enter($__internal_abf45d731ee2104f081dbe0195ddfd8efeef0a70e5901c57b3ac19b0cf8aa039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_abf45d731ee2104f081dbe0195ddfd8efeef0a70e5901c57b3ac19b0cf8aa039->leave($__internal_abf45d731ee2104f081dbe0195ddfd8efeef0a70e5901c57b3ac19b0cf8aa039_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7cbd36bc3627f537c0ae6b5c56f261c960eb78ada9c6a124d9b6921ff5c4c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cbd36bc3627f537c0ae6b5c56f261c960eb78ada9c6a124d9b6921ff5c4c61->enter($__internal_c7cbd36bc3627f537c0ae6b5c56f261c960eb78ada9c6a124d9b6921ff5c4c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c7cbd36bc3627f537c0ae6b5c56f261c960eb78ada9c6a124d9b6921ff5c4c61->leave($__internal_c7cbd36bc3627f537c0ae6b5c56f261c960eb78ada9c6a124d9b6921ff5c4c61_prof);

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

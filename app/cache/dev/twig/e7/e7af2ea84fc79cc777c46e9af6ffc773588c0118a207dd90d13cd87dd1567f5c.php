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
        $__internal_362647bb5dd332e70a234df5de25590bd0190ac9a2a05b71412821a2d347e98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362647bb5dd332e70a234df5de25590bd0190ac9a2a05b71412821a2d347e98f->enter($__internal_362647bb5dd332e70a234df5de25590bd0190ac9a2a05b71412821a2d347e98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_362647bb5dd332e70a234df5de25590bd0190ac9a2a05b71412821a2d347e98f->leave($__internal_362647bb5dd332e70a234df5de25590bd0190ac9a2a05b71412821a2d347e98f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9989b07881dd250c98b0eb06156a677204cad59443953f7694bd93d7b6edafa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9989b07881dd250c98b0eb06156a677204cad59443953f7694bd93d7b6edafa6->enter($__internal_9989b07881dd250c98b0eb06156a677204cad59443953f7694bd93d7b6edafa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9989b07881dd250c98b0eb06156a677204cad59443953f7694bd93d7b6edafa6->leave($__internal_9989b07881dd250c98b0eb06156a677204cad59443953f7694bd93d7b6edafa6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49021ac4cce6db0ff4e6345cd87a7b2e316e8babd2f6daf2d14f3cc6bfef058a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49021ac4cce6db0ff4e6345cd87a7b2e316e8babd2f6daf2d14f3cc6bfef058a->enter($__internal_49021ac4cce6db0ff4e6345cd87a7b2e316e8babd2f6daf2d14f3cc6bfef058a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_49021ac4cce6db0ff4e6345cd87a7b2e316e8babd2f6daf2d14f3cc6bfef058a->leave($__internal_49021ac4cce6db0ff4e6345cd87a7b2e316e8babd2f6daf2d14f3cc6bfef058a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2f3f3f349d92f9043fbb16120c67d6ee11c3606c538f6d21de1cc9faeec1d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f3f3f349d92f9043fbb16120c67d6ee11c3606c538f6d21de1cc9faeec1d9a->enter($__internal_e2f3f3f349d92f9043fbb16120c67d6ee11c3606c538f6d21de1cc9faeec1d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e2f3f3f349d92f9043fbb16120c67d6ee11c3606c538f6d21de1cc9faeec1d9a->leave($__internal_e2f3f3f349d92f9043fbb16120c67d6ee11c3606c538f6d21de1cc9faeec1d9a_prof);

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

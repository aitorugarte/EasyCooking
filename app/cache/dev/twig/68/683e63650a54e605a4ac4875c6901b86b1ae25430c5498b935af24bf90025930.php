<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f492cb492156c9f972a8de01df4b158f7757e607c029cd381c2b31fbf7b282b6 extends Twig_Template
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
        $__internal_63937041a03c86bd44c752d31e8e2d64db70a95af55b387442f5269766b352ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63937041a03c86bd44c752d31e8e2d64db70a95af55b387442f5269766b352ee->enter($__internal_63937041a03c86bd44c752d31e8e2d64db70a95af55b387442f5269766b352ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63937041a03c86bd44c752d31e8e2d64db70a95af55b387442f5269766b352ee->leave($__internal_63937041a03c86bd44c752d31e8e2d64db70a95af55b387442f5269766b352ee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d745edeeca0917d70af5783e48388c2505dd77d67cda4aa6dcd44e26e88bd555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d745edeeca0917d70af5783e48388c2505dd77d67cda4aa6dcd44e26e88bd555->enter($__internal_d745edeeca0917d70af5783e48388c2505dd77d67cda4aa6dcd44e26e88bd555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d745edeeca0917d70af5783e48388c2505dd77d67cda4aa6dcd44e26e88bd555->leave($__internal_d745edeeca0917d70af5783e48388c2505dd77d67cda4aa6dcd44e26e88bd555_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24d614c3e1f8231e13ee19a12f3dc27e7a9181313dde20609ac094c588784e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d614c3e1f8231e13ee19a12f3dc27e7a9181313dde20609ac094c588784e1c->enter($__internal_24d614c3e1f8231e13ee19a12f3dc27e7a9181313dde20609ac094c588784e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_24d614c3e1f8231e13ee19a12f3dc27e7a9181313dde20609ac094c588784e1c->leave($__internal_24d614c3e1f8231e13ee19a12f3dc27e7a9181313dde20609ac094c588784e1c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f1dea449c364b70617dd5ef4134c267c7bf9002493b9a9389887ef5fb207e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1dea449c364b70617dd5ef4134c267c7bf9002493b9a9389887ef5fb207e18->enter($__internal_0f1dea449c364b70617dd5ef4134c267c7bf9002493b9a9389887ef5fb207e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0f1dea449c364b70617dd5ef4134c267c7bf9002493b9a9389887ef5fb207e18->leave($__internal_0f1dea449c364b70617dd5ef4134c267c7bf9002493b9a9389887ef5fb207e18_prof);

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

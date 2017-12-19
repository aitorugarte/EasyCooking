<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_aed170cb720940774f89cdaa5bc1c8a29ac22266d3e3cba689d8c2037089f1c0 extends Twig_Template
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
        $__internal_0f66ef53a23f20c15aa532cc0dd2023f40780295c0179c1a5f7d081a79abfa7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f66ef53a23f20c15aa532cc0dd2023f40780295c0179c1a5f7d081a79abfa7f->enter($__internal_0f66ef53a23f20c15aa532cc0dd2023f40780295c0179c1a5f7d081a79abfa7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f66ef53a23f20c15aa532cc0dd2023f40780295c0179c1a5f7d081a79abfa7f->leave($__internal_0f66ef53a23f20c15aa532cc0dd2023f40780295c0179c1a5f7d081a79abfa7f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5330a56cf61f9e65ec91b2ba51a8901022914e7cef98e80b4fa60492fb5bd852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5330a56cf61f9e65ec91b2ba51a8901022914e7cef98e80b4fa60492fb5bd852->enter($__internal_5330a56cf61f9e65ec91b2ba51a8901022914e7cef98e80b4fa60492fb5bd852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5330a56cf61f9e65ec91b2ba51a8901022914e7cef98e80b4fa60492fb5bd852->leave($__internal_5330a56cf61f9e65ec91b2ba51a8901022914e7cef98e80b4fa60492fb5bd852_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5d169d49875dd252ebe2df91f434798e79f973bbc9d970a41305e088d93a3b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d169d49875dd252ebe2df91f434798e79f973bbc9d970a41305e088d93a3b59->enter($__internal_5d169d49875dd252ebe2df91f434798e79f973bbc9d970a41305e088d93a3b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5d169d49875dd252ebe2df91f434798e79f973bbc9d970a41305e088d93a3b59->leave($__internal_5d169d49875dd252ebe2df91f434798e79f973bbc9d970a41305e088d93a3b59_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e80d74ec2895842ed6e2ed9a27f7f5c16128ae74cfaebe3fe12c1aff6afdcca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80d74ec2895842ed6e2ed9a27f7f5c16128ae74cfaebe3fe12c1aff6afdcca3->enter($__internal_e80d74ec2895842ed6e2ed9a27f7f5c16128ae74cfaebe3fe12c1aff6afdcca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e80d74ec2895842ed6e2ed9a27f7f5c16128ae74cfaebe3fe12c1aff6afdcca3->leave($__internal_e80d74ec2895842ed6e2ed9a27f7f5c16128ae74cfaebe3fe12c1aff6afdcca3_prof);

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

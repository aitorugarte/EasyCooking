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
        $__internal_7db7a7d240765dd715ba4065f1ed2bbc8b7f4a7f9b2fdb5d8fd57f4c4e8241de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db7a7d240765dd715ba4065f1ed2bbc8b7f4a7f9b2fdb5d8fd57f4c4e8241de->enter($__internal_7db7a7d240765dd715ba4065f1ed2bbc8b7f4a7f9b2fdb5d8fd57f4c4e8241de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7db7a7d240765dd715ba4065f1ed2bbc8b7f4a7f9b2fdb5d8fd57f4c4e8241de->leave($__internal_7db7a7d240765dd715ba4065f1ed2bbc8b7f4a7f9b2fdb5d8fd57f4c4e8241de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b3a0a9a962783401c8f8023827697b00ccdad5db0c0c9a866b693c762fb1f80e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a0a9a962783401c8f8023827697b00ccdad5db0c0c9a866b693c762fb1f80e->enter($__internal_b3a0a9a962783401c8f8023827697b00ccdad5db0c0c9a866b693c762fb1f80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b3a0a9a962783401c8f8023827697b00ccdad5db0c0c9a866b693c762fb1f80e->leave($__internal_b3a0a9a962783401c8f8023827697b00ccdad5db0c0c9a866b693c762fb1f80e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_232d7881d583d427a45dad6ad0723ecc979655fde343b586e978046edf9f1724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232d7881d583d427a45dad6ad0723ecc979655fde343b586e978046edf9f1724->enter($__internal_232d7881d583d427a45dad6ad0723ecc979655fde343b586e978046edf9f1724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_232d7881d583d427a45dad6ad0723ecc979655fde343b586e978046edf9f1724->leave($__internal_232d7881d583d427a45dad6ad0723ecc979655fde343b586e978046edf9f1724_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7370ce3c08afe78da4dd0addf27263fffa08453385237b55deee83e4a821d1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7370ce3c08afe78da4dd0addf27263fffa08453385237b55deee83e4a821d1a0->enter($__internal_7370ce3c08afe78da4dd0addf27263fffa08453385237b55deee83e4a821d1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7370ce3c08afe78da4dd0addf27263fffa08453385237b55deee83e4a821d1a0->leave($__internal_7370ce3c08afe78da4dd0addf27263fffa08453385237b55deee83e4a821d1a0_prof);

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

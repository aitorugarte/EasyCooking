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
        $__internal_0c6ede9b68855a7ec8299d897c4fa4638333502e011fb3e5fb509b3852246672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6ede9b68855a7ec8299d897c4fa4638333502e011fb3e5fb509b3852246672->enter($__internal_0c6ede9b68855a7ec8299d897c4fa4638333502e011fb3e5fb509b3852246672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c6ede9b68855a7ec8299d897c4fa4638333502e011fb3e5fb509b3852246672->leave($__internal_0c6ede9b68855a7ec8299d897c4fa4638333502e011fb3e5fb509b3852246672_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_03fbbc22c480d6282da1f465d272eea188b92e369e0a222f20524fefcf4cba62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03fbbc22c480d6282da1f465d272eea188b92e369e0a222f20524fefcf4cba62->enter($__internal_03fbbc22c480d6282da1f465d272eea188b92e369e0a222f20524fefcf4cba62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_03fbbc22c480d6282da1f465d272eea188b92e369e0a222f20524fefcf4cba62->leave($__internal_03fbbc22c480d6282da1f465d272eea188b92e369e0a222f20524fefcf4cba62_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b8bf2e6e6c9e40b139e3b25401ae3f5fedfeac9b98f490dd31411cd9cc1e599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8bf2e6e6c9e40b139e3b25401ae3f5fedfeac9b98f490dd31411cd9cc1e599->enter($__internal_5b8bf2e6e6c9e40b139e3b25401ae3f5fedfeac9b98f490dd31411cd9cc1e599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5b8bf2e6e6c9e40b139e3b25401ae3f5fedfeac9b98f490dd31411cd9cc1e599->leave($__internal_5b8bf2e6e6c9e40b139e3b25401ae3f5fedfeac9b98f490dd31411cd9cc1e599_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9550154b6b3e68d77da775c6d00dff699a8d983faeff24fe9225283c454558c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9550154b6b3e68d77da775c6d00dff699a8d983faeff24fe9225283c454558c->enter($__internal_f9550154b6b3e68d77da775c6d00dff699a8d983faeff24fe9225283c454558c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f9550154b6b3e68d77da775c6d00dff699a8d983faeff24fe9225283c454558c->leave($__internal_f9550154b6b3e68d77da775c6d00dff699a8d983faeff24fe9225283c454558c_prof);

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

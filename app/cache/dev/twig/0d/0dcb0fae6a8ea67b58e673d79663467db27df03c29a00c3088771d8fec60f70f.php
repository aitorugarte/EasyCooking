<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d02573ad3e1931d251f7b5eb8a85540b2b7bce5f05c854983ca14b6afaa602c8 extends Twig_Template
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
        $__internal_1dad9ba9fd1a644f3730a7e16fac701784063c9f04737ca0a89137554163755e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dad9ba9fd1a644f3730a7e16fac701784063c9f04737ca0a89137554163755e->enter($__internal_1dad9ba9fd1a644f3730a7e16fac701784063c9f04737ca0a89137554163755e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dad9ba9fd1a644f3730a7e16fac701784063c9f04737ca0a89137554163755e->leave($__internal_1dad9ba9fd1a644f3730a7e16fac701784063c9f04737ca0a89137554163755e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_820f18373ec9430732500101a4356f424cbfdfd4decdda7338496423dc0b054b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820f18373ec9430732500101a4356f424cbfdfd4decdda7338496423dc0b054b->enter($__internal_820f18373ec9430732500101a4356f424cbfdfd4decdda7338496423dc0b054b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_820f18373ec9430732500101a4356f424cbfdfd4decdda7338496423dc0b054b->leave($__internal_820f18373ec9430732500101a4356f424cbfdfd4decdda7338496423dc0b054b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_783db6a9a134aaff52d5c89847b2969bc9f1056cd73c22b0c708c3e01f883ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_783db6a9a134aaff52d5c89847b2969bc9f1056cd73c22b0c708c3e01f883ebc->enter($__internal_783db6a9a134aaff52d5c89847b2969bc9f1056cd73c22b0c708c3e01f883ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_783db6a9a134aaff52d5c89847b2969bc9f1056cd73c22b0c708c3e01f883ebc->leave($__internal_783db6a9a134aaff52d5c89847b2969bc9f1056cd73c22b0c708c3e01f883ebc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_759690b13127b907c01b3e6d5534d62316e74ac44fae6ef25d7d9bf1e908745d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759690b13127b907c01b3e6d5534d62316e74ac44fae6ef25d7d9bf1e908745d->enter($__internal_759690b13127b907c01b3e6d5534d62316e74ac44fae6ef25d7d9bf1e908745d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_759690b13127b907c01b3e6d5534d62316e74ac44fae6ef25d7d9bf1e908745d->leave($__internal_759690b13127b907c01b3e6d5534d62316e74ac44fae6ef25d7d9bf1e908745d_prof);

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

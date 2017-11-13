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
        $__internal_d02272856f72398475fab8bd6d718e8a237dfe5edb14ddef8157f390842194b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02272856f72398475fab8bd6d718e8a237dfe5edb14ddef8157f390842194b5->enter($__internal_d02272856f72398475fab8bd6d718e8a237dfe5edb14ddef8157f390842194b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d02272856f72398475fab8bd6d718e8a237dfe5edb14ddef8157f390842194b5->leave($__internal_d02272856f72398475fab8bd6d718e8a237dfe5edb14ddef8157f390842194b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6868f96401dadb7b85c93af0e2f05e8d525611717d7658600dc3c8c8d3573cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6868f96401dadb7b85c93af0e2f05e8d525611717d7658600dc3c8c8d3573cbc->enter($__internal_6868f96401dadb7b85c93af0e2f05e8d525611717d7658600dc3c8c8d3573cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6868f96401dadb7b85c93af0e2f05e8d525611717d7658600dc3c8c8d3573cbc->leave($__internal_6868f96401dadb7b85c93af0e2f05e8d525611717d7658600dc3c8c8d3573cbc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b51d978e6b37a892ec3e2ab27a46b78e5c495e557471af42d35c7799625910ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51d978e6b37a892ec3e2ab27a46b78e5c495e557471af42d35c7799625910ef->enter($__internal_b51d978e6b37a892ec3e2ab27a46b78e5c495e557471af42d35c7799625910ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b51d978e6b37a892ec3e2ab27a46b78e5c495e557471af42d35c7799625910ef->leave($__internal_b51d978e6b37a892ec3e2ab27a46b78e5c495e557471af42d35c7799625910ef_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_209fabce068e65ced0c7296775668ae0d7392a06a5745ccc4e4a25bf26a45d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209fabce068e65ced0c7296775668ae0d7392a06a5745ccc4e4a25bf26a45d58->enter($__internal_209fabce068e65ced0c7296775668ae0d7392a06a5745ccc4e4a25bf26a45d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_209fabce068e65ced0c7296775668ae0d7392a06a5745ccc4e4a25bf26a45d58->leave($__internal_209fabce068e65ced0c7296775668ae0d7392a06a5745ccc4e4a25bf26a45d58_prof);

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

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
        $__internal_3a1719504d06c30b8bbb178488356239763720d827e6b9ab2067eaba1d62cdf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1719504d06c30b8bbb178488356239763720d827e6b9ab2067eaba1d62cdf7->enter($__internal_3a1719504d06c30b8bbb178488356239763720d827e6b9ab2067eaba1d62cdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a1719504d06c30b8bbb178488356239763720d827e6b9ab2067eaba1d62cdf7->leave($__internal_3a1719504d06c30b8bbb178488356239763720d827e6b9ab2067eaba1d62cdf7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4a5fe31c1d339bf65ca7c013214ac6104dd579ddd168c906ef217b0e96f509b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5fe31c1d339bf65ca7c013214ac6104dd579ddd168c906ef217b0e96f509b4->enter($__internal_4a5fe31c1d339bf65ca7c013214ac6104dd579ddd168c906ef217b0e96f509b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4a5fe31c1d339bf65ca7c013214ac6104dd579ddd168c906ef217b0e96f509b4->leave($__internal_4a5fe31c1d339bf65ca7c013214ac6104dd579ddd168c906ef217b0e96f509b4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b876c608b1586919cb559f26f87665e0b6c1931d707a6123033504d51de3712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b876c608b1586919cb559f26f87665e0b6c1931d707a6123033504d51de3712->enter($__internal_6b876c608b1586919cb559f26f87665e0b6c1931d707a6123033504d51de3712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6b876c608b1586919cb559f26f87665e0b6c1931d707a6123033504d51de3712->leave($__internal_6b876c608b1586919cb559f26f87665e0b6c1931d707a6123033504d51de3712_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b78040d4a38b249354fc7a96321976fd620f24d84c5cec68b842ad5759b69f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b78040d4a38b249354fc7a96321976fd620f24d84c5cec68b842ad5759b69f7->enter($__internal_5b78040d4a38b249354fc7a96321976fd620f24d84c5cec68b842ad5759b69f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5b78040d4a38b249354fc7a96321976fd620f24d84c5cec68b842ad5759b69f7->leave($__internal_5b78040d4a38b249354fc7a96321976fd620f24d84c5cec68b842ad5759b69f7_prof);

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

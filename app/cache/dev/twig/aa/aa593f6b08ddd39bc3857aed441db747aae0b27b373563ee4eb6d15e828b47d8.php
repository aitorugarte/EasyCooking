<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_8fba5c5697898b39c7af9b84e38757e94be5dbc7c0075c3b2301dbb9029262d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8a399279c079a9391b7aba3845911e0f9192b8010f72345b39992bc3f97f277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a399279c079a9391b7aba3845911e0f9192b8010f72345b39992bc3f97f277->enter($__internal_b8a399279c079a9391b7aba3845911e0f9192b8010f72345b39992bc3f97f277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8a399279c079a9391b7aba3845911e0f9192b8010f72345b39992bc3f97f277->leave($__internal_b8a399279c079a9391b7aba3845911e0f9192b8010f72345b39992bc3f97f277_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_97e9800746cb807cf8fa9de0f008f76f42e0a1a0a15113cd9af7adb64e0b66d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e9800746cb807cf8fa9de0f008f76f42e0a1a0a15113cd9af7adb64e0b66d0->enter($__internal_97e9800746cb807cf8fa9de0f008f76f42e0a1a0a15113cd9af7adb64e0b66d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_97e9800746cb807cf8fa9de0f008f76f42e0a1a0a15113cd9af7adb64e0b66d0->leave($__internal_97e9800746cb807cf8fa9de0f008f76f42e0a1a0a15113cd9af7adb64e0b66d0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6141e2f234f20c38a908d831b668b30f932cb4c043d97de2308db23cd5b84939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6141e2f234f20c38a908d831b668b30f932cb4c043d97de2308db23cd5b84939->enter($__internal_6141e2f234f20c38a908d831b668b30f932cb4c043d97de2308db23cd5b84939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6141e2f234f20c38a908d831b668b30f932cb4c043d97de2308db23cd5b84939->leave($__internal_6141e2f234f20c38a908d831b668b30f932cb4c043d97de2308db23cd5b84939_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}

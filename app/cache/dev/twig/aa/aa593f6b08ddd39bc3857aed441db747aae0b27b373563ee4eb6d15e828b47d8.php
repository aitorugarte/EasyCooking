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
        $__internal_09a927de29814aea4c12b76c0ecdc0536a2dfaab9c8d7b12bea6e1533b22472b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a927de29814aea4c12b76c0ecdc0536a2dfaab9c8d7b12bea6e1533b22472b->enter($__internal_09a927de29814aea4c12b76c0ecdc0536a2dfaab9c8d7b12bea6e1533b22472b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09a927de29814aea4c12b76c0ecdc0536a2dfaab9c8d7b12bea6e1533b22472b->leave($__internal_09a927de29814aea4c12b76c0ecdc0536a2dfaab9c8d7b12bea6e1533b22472b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8afd08bfe5ae52f338c229ec0b3353f9cab8b6c359048b04263a34debe09d810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afd08bfe5ae52f338c229ec0b3353f9cab8b6c359048b04263a34debe09d810->enter($__internal_8afd08bfe5ae52f338c229ec0b3353f9cab8b6c359048b04263a34debe09d810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8afd08bfe5ae52f338c229ec0b3353f9cab8b6c359048b04263a34debe09d810->leave($__internal_8afd08bfe5ae52f338c229ec0b3353f9cab8b6c359048b04263a34debe09d810_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f115836215f362048b22f04b3d67a2e60d194c9a8875346c1179f492cb1987d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f115836215f362048b22f04b3d67a2e60d194c9a8875346c1179f492cb1987d4->enter($__internal_f115836215f362048b22f04b3d67a2e60d194c9a8875346c1179f492cb1987d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f115836215f362048b22f04b3d67a2e60d194c9a8875346c1179f492cb1987d4->leave($__internal_f115836215f362048b22f04b3d67a2e60d194c9a8875346c1179f492cb1987d4_prof);

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

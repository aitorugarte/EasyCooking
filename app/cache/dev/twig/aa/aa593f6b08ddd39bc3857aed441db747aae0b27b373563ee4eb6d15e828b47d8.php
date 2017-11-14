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
        $__internal_851e0107a356f079491f7736f9fd7550bbc8e54f820eed9d20ba1ed6f48e7921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851e0107a356f079491f7736f9fd7550bbc8e54f820eed9d20ba1ed6f48e7921->enter($__internal_851e0107a356f079491f7736f9fd7550bbc8e54f820eed9d20ba1ed6f48e7921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_851e0107a356f079491f7736f9fd7550bbc8e54f820eed9d20ba1ed6f48e7921->leave($__internal_851e0107a356f079491f7736f9fd7550bbc8e54f820eed9d20ba1ed6f48e7921_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05f984e2e6beaa1889ea46d84363486b19b9a075a9c51ca07ff8a48e49c77f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f984e2e6beaa1889ea46d84363486b19b9a075a9c51ca07ff8a48e49c77f77->enter($__internal_05f984e2e6beaa1889ea46d84363486b19b9a075a9c51ca07ff8a48e49c77f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_05f984e2e6beaa1889ea46d84363486b19b9a075a9c51ca07ff8a48e49c77f77->leave($__internal_05f984e2e6beaa1889ea46d84363486b19b9a075a9c51ca07ff8a48e49c77f77_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d9eb1302c68da8aa4d4a47809d232e062b0f704c497a04cdb8b50081a935e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9eb1302c68da8aa4d4a47809d232e062b0f704c497a04cdb8b50081a935e9c->enter($__internal_4d9eb1302c68da8aa4d4a47809d232e062b0f704c497a04cdb8b50081a935e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4d9eb1302c68da8aa4d4a47809d232e062b0f704c497a04cdb8b50081a935e9c->leave($__internal_4d9eb1302c68da8aa4d4a47809d232e062b0f704c497a04cdb8b50081a935e9c_prof);

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

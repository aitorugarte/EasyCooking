<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_08376dfef13fae8630944fbbe37a6b70aeb78ef495b9098d87f4bd42b6fcba67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_e96f35409a6239c8c251f4e40e9507f05483b287d0e53f8044d948bc41b8feaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96f35409a6239c8c251f4e40e9507f05483b287d0e53f8044d948bc41b8feaf->enter($__internal_e96f35409a6239c8c251f4e40e9507f05483b287d0e53f8044d948bc41b8feaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e96f35409a6239c8c251f4e40e9507f05483b287d0e53f8044d948bc41b8feaf->leave($__internal_e96f35409a6239c8c251f4e40e9507f05483b287d0e53f8044d948bc41b8feaf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_817dfba474cf289651b630f17ab252ae6d8878329a8f34c3ba6fbb037256ebaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817dfba474cf289651b630f17ab252ae6d8878329a8f34c3ba6fbb037256ebaa->enter($__internal_817dfba474cf289651b630f17ab252ae6d8878329a8f34c3ba6fbb037256ebaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_817dfba474cf289651b630f17ab252ae6d8878329a8f34c3ba6fbb037256ebaa->leave($__internal_817dfba474cf289651b630f17ab252ae6d8878329a8f34c3ba6fbb037256ebaa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_946caec1c6c09c4033e9da3aee72bf4d00acd8a1ee714c482855863bb9132362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946caec1c6c09c4033e9da3aee72bf4d00acd8a1ee714c482855863bb9132362->enter($__internal_946caec1c6c09c4033e9da3aee72bf4d00acd8a1ee714c482855863bb9132362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_946caec1c6c09c4033e9da3aee72bf4d00acd8a1ee714c482855863bb9132362->leave($__internal_946caec1c6c09c4033e9da3aee72bf4d00acd8a1ee714c482855863bb9132362_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

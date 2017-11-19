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
        $__internal_fab19208f492d1631f2067d9c9bcfab386f955c2b06ab8685c53f87416cbe80b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab19208f492d1631f2067d9c9bcfab386f955c2b06ab8685c53f87416cbe80b->enter($__internal_fab19208f492d1631f2067d9c9bcfab386f955c2b06ab8685c53f87416cbe80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fab19208f492d1631f2067d9c9bcfab386f955c2b06ab8685c53f87416cbe80b->leave($__internal_fab19208f492d1631f2067d9c9bcfab386f955c2b06ab8685c53f87416cbe80b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e8e6b614447121c974d14a47bb7aae4d6d127d56ee79f6d185af1b418c24989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8e6b614447121c974d14a47bb7aae4d6d127d56ee79f6d185af1b418c24989->enter($__internal_1e8e6b614447121c974d14a47bb7aae4d6d127d56ee79f6d185af1b418c24989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1e8e6b614447121c974d14a47bb7aae4d6d127d56ee79f6d185af1b418c24989->leave($__internal_1e8e6b614447121c974d14a47bb7aae4d6d127d56ee79f6d185af1b418c24989_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bd9253281e93f254b1e727be562d3669b788eae0303c4088a6d855851243e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd9253281e93f254b1e727be562d3669b788eae0303c4088a6d855851243e5c->enter($__internal_4bd9253281e93f254b1e727be562d3669b788eae0303c4088a6d855851243e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4bd9253281e93f254b1e727be562d3669b788eae0303c4088a6d855851243e5c->leave($__internal_4bd9253281e93f254b1e727be562d3669b788eae0303c4088a6d855851243e5c_prof);

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

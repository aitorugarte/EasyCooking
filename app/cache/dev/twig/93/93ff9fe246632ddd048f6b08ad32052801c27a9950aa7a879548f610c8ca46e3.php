<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f21b7ea291728572a5ab8c5ababa409bb1297cef76ce9151aec1e763ae7d361b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0707e505ab72ff1d17bef2c0e69bd2d3dda1bbdfba7bc78cbdf11228535b6ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0707e505ab72ff1d17bef2c0e69bd2d3dda1bbdfba7bc78cbdf11228535b6ced->enter($__internal_0707e505ab72ff1d17bef2c0e69bd2d3dda1bbdfba7bc78cbdf11228535b6ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0707e505ab72ff1d17bef2c0e69bd2d3dda1bbdfba7bc78cbdf11228535b6ced->leave($__internal_0707e505ab72ff1d17bef2c0e69bd2d3dda1bbdfba7bc78cbdf11228535b6ced_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f21911c988032b2a64eac0961148459000a38b4e2d632554ba6d5705113006cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21911c988032b2a64eac0961148459000a38b4e2d632554ba6d5705113006cb->enter($__internal_f21911c988032b2a64eac0961148459000a38b4e2d632554ba6d5705113006cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f21911c988032b2a64eac0961148459000a38b4e2d632554ba6d5705113006cb->leave($__internal_f21911c988032b2a64eac0961148459000a38b4e2d632554ba6d5705113006cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa2bc2e83739f999b980082610ce0e8da1ab6d586ca91611d0db5e437dbc6940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2bc2e83739f999b980082610ce0e8da1ab6d586ca91611d0db5e437dbc6940->enter($__internal_fa2bc2e83739f999b980082610ce0e8da1ab6d586ca91611d0db5e437dbc6940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fa2bc2e83739f999b980082610ce0e8da1ab6d586ca91611d0db5e437dbc6940->leave($__internal_fa2bc2e83739f999b980082610ce0e8da1ab6d586ca91611d0db5e437dbc6940_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_176693f1ac39270b6cec5b41f2115bb134f39fc3d43f5c367c1cf9cf061ea10f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176693f1ac39270b6cec5b41f2115bb134f39fc3d43f5c367c1cf9cf061ea10f->enter($__internal_176693f1ac39270b6cec5b41f2115bb134f39fc3d43f5c367c1cf9cf061ea10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_176693f1ac39270b6cec5b41f2115bb134f39fc3d43f5c367c1cf9cf061ea10f->leave($__internal_176693f1ac39270b6cec5b41f2115bb134f39fc3d43f5c367c1cf9cf061ea10f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

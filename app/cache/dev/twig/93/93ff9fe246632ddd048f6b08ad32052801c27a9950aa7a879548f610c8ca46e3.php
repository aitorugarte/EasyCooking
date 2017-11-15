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
        $__internal_44914cad29c20b1b6bbb1f97688a951ff0dcdd6d8116c0c43210dd927f6d07a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44914cad29c20b1b6bbb1f97688a951ff0dcdd6d8116c0c43210dd927f6d07a9->enter($__internal_44914cad29c20b1b6bbb1f97688a951ff0dcdd6d8116c0c43210dd927f6d07a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44914cad29c20b1b6bbb1f97688a951ff0dcdd6d8116c0c43210dd927f6d07a9->leave($__internal_44914cad29c20b1b6bbb1f97688a951ff0dcdd6d8116c0c43210dd927f6d07a9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b554e89b9a8f9cbe43cfb16040bb5d95ca6c583f7422b60316c3b948b2185902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b554e89b9a8f9cbe43cfb16040bb5d95ca6c583f7422b60316c3b948b2185902->enter($__internal_b554e89b9a8f9cbe43cfb16040bb5d95ca6c583f7422b60316c3b948b2185902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b554e89b9a8f9cbe43cfb16040bb5d95ca6c583f7422b60316c3b948b2185902->leave($__internal_b554e89b9a8f9cbe43cfb16040bb5d95ca6c583f7422b60316c3b948b2185902_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_22f1af46a4aeb4d16b9f2f254739b51cf78ba0a82fd91b37d28707876b47cc14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f1af46a4aeb4d16b9f2f254739b51cf78ba0a82fd91b37d28707876b47cc14->enter($__internal_22f1af46a4aeb4d16b9f2f254739b51cf78ba0a82fd91b37d28707876b47cc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_22f1af46a4aeb4d16b9f2f254739b51cf78ba0a82fd91b37d28707876b47cc14->leave($__internal_22f1af46a4aeb4d16b9f2f254739b51cf78ba0a82fd91b37d28707876b47cc14_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7284616d20db7abe5622ef7b8fb8c88e2e88e08629a0014a1c713d589f917745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7284616d20db7abe5622ef7b8fb8c88e2e88e08629a0014a1c713d589f917745->enter($__internal_7284616d20db7abe5622ef7b8fb8c88e2e88e08629a0014a1c713d589f917745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7284616d20db7abe5622ef7b8fb8c88e2e88e08629a0014a1c713d589f917745->leave($__internal_7284616d20db7abe5622ef7b8fb8c88e2e88e08629a0014a1c713d589f917745_prof);

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

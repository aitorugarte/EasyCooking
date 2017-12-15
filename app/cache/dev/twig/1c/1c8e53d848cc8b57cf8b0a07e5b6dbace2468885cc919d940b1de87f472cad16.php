<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d058a5f626ae98d4eef3f0222602b751b9c1afe925737d35d96132b63f8317cd extends Twig_Template
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
        $__internal_d8bcb55b908c8df84fb485235a411115f8df3d966cc606598ef67002e25552a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bcb55b908c8df84fb485235a411115f8df3d966cc606598ef67002e25552a7->enter($__internal_d8bcb55b908c8df84fb485235a411115f8df3d966cc606598ef67002e25552a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8bcb55b908c8df84fb485235a411115f8df3d966cc606598ef67002e25552a7->leave($__internal_d8bcb55b908c8df84fb485235a411115f8df3d966cc606598ef67002e25552a7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c56f2b4eef24036ccd4cc9378520a5cc6cb2e0ff4df2c41cf7b84e56fba7521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c56f2b4eef24036ccd4cc9378520a5cc6cb2e0ff4df2c41cf7b84e56fba7521->enter($__internal_8c56f2b4eef24036ccd4cc9378520a5cc6cb2e0ff4df2c41cf7b84e56fba7521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8c56f2b4eef24036ccd4cc9378520a5cc6cb2e0ff4df2c41cf7b84e56fba7521->leave($__internal_8c56f2b4eef24036ccd4cc9378520a5cc6cb2e0ff4df2c41cf7b84e56fba7521_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_84d12678090b5b33909cfd9f412b6a9008004d65a17f3a73dd77ca46dac8d684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d12678090b5b33909cfd9f412b6a9008004d65a17f3a73dd77ca46dac8d684->enter($__internal_84d12678090b5b33909cfd9f412b6a9008004d65a17f3a73dd77ca46dac8d684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_84d12678090b5b33909cfd9f412b6a9008004d65a17f3a73dd77ca46dac8d684->leave($__internal_84d12678090b5b33909cfd9f412b6a9008004d65a17f3a73dd77ca46dac8d684_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_955f15566cd163e24bf793135b1c6a782b345b04e7e0d7e9ed2bdbd0b445bac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955f15566cd163e24bf793135b1c6a782b345b04e7e0d7e9ed2bdbd0b445bac0->enter($__internal_955f15566cd163e24bf793135b1c6a782b345b04e7e0d7e9ed2bdbd0b445bac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_955f15566cd163e24bf793135b1c6a782b345b04e7e0d7e9ed2bdbd0b445bac0->leave($__internal_955f15566cd163e24bf793135b1c6a782b345b04e7e0d7e9ed2bdbd0b445bac0_prof);

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

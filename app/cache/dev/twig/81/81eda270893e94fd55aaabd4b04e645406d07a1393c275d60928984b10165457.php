<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d7660727b9ca449ba4fc4eeda6c605d9884ead04c0b78fcd7c9d55644fa1a747 extends Twig_Template
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
        $__internal_43c08e1a6ba994cf4f8e5c966cd129de6bfe7e54a474c2eb11dcca37dc107dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c08e1a6ba994cf4f8e5c966cd129de6bfe7e54a474c2eb11dcca37dc107dcc->enter($__internal_43c08e1a6ba994cf4f8e5c966cd129de6bfe7e54a474c2eb11dcca37dc107dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43c08e1a6ba994cf4f8e5c966cd129de6bfe7e54a474c2eb11dcca37dc107dcc->leave($__internal_43c08e1a6ba994cf4f8e5c966cd129de6bfe7e54a474c2eb11dcca37dc107dcc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5360d067b6525af6776b428432645465a75fe5ca6724c2e127933c7ed9d8b833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5360d067b6525af6776b428432645465a75fe5ca6724c2e127933c7ed9d8b833->enter($__internal_5360d067b6525af6776b428432645465a75fe5ca6724c2e127933c7ed9d8b833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5360d067b6525af6776b428432645465a75fe5ca6724c2e127933c7ed9d8b833->leave($__internal_5360d067b6525af6776b428432645465a75fe5ca6724c2e127933c7ed9d8b833_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c9423047168e0243cb0cdff6eae190838453f0403eb08d2fc3339b1c89a1976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9423047168e0243cb0cdff6eae190838453f0403eb08d2fc3339b1c89a1976->enter($__internal_5c9423047168e0243cb0cdff6eae190838453f0403eb08d2fc3339b1c89a1976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c9423047168e0243cb0cdff6eae190838453f0403eb08d2fc3339b1c89a1976->leave($__internal_5c9423047168e0243cb0cdff6eae190838453f0403eb08d2fc3339b1c89a1976_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd69e9051d18905a7f1aab2dbc12907bab4e8058235f0b4038c51414e3e07d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd69e9051d18905a7f1aab2dbc12907bab4e8058235f0b4038c51414e3e07d8d->enter($__internal_dd69e9051d18905a7f1aab2dbc12907bab4e8058235f0b4038c51414e3e07d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dd69e9051d18905a7f1aab2dbc12907bab4e8058235f0b4038c51414e3e07d8d->leave($__internal_dd69e9051d18905a7f1aab2dbc12907bab4e8058235f0b4038c51414e3e07d8d_prof);

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

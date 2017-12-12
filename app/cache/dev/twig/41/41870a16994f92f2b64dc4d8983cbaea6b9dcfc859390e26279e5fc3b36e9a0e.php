<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_edd653923438e67d6eaa61d5840b114fd8b3e8b30fe59da261433bc94772d5be extends Twig_Template
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
        $__internal_3a4978b148e674b741489ed77650958b793700920a11918faf38c16bea108d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4978b148e674b741489ed77650958b793700920a11918faf38c16bea108d8e->enter($__internal_3a4978b148e674b741489ed77650958b793700920a11918faf38c16bea108d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a4978b148e674b741489ed77650958b793700920a11918faf38c16bea108d8e->leave($__internal_3a4978b148e674b741489ed77650958b793700920a11918faf38c16bea108d8e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b353e89fab9984e6ac9fc1df622ddf5c9804143e3f9aacba116dc2269313f2be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b353e89fab9984e6ac9fc1df622ddf5c9804143e3f9aacba116dc2269313f2be->enter($__internal_b353e89fab9984e6ac9fc1df622ddf5c9804143e3f9aacba116dc2269313f2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b353e89fab9984e6ac9fc1df622ddf5c9804143e3f9aacba116dc2269313f2be->leave($__internal_b353e89fab9984e6ac9fc1df622ddf5c9804143e3f9aacba116dc2269313f2be_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c0696b2f1e6e75c3697039568f880bd0178a5931901f2a66bca1fd5e7dfb55d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0696b2f1e6e75c3697039568f880bd0178a5931901f2a66bca1fd5e7dfb55d->enter($__internal_5c0696b2f1e6e75c3697039568f880bd0178a5931901f2a66bca1fd5e7dfb55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c0696b2f1e6e75c3697039568f880bd0178a5931901f2a66bca1fd5e7dfb55d->leave($__internal_5c0696b2f1e6e75c3697039568f880bd0178a5931901f2a66bca1fd5e7dfb55d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d3de1d176f0a8fd334f89f816a504fd13ca5216a64868fe75ef5fde5b5b16ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3de1d176f0a8fd334f89f816a504fd13ca5216a64868fe75ef5fde5b5b16ed->enter($__internal_1d3de1d176f0a8fd334f89f816a504fd13ca5216a64868fe75ef5fde5b5b16ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1d3de1d176f0a8fd334f89f816a504fd13ca5216a64868fe75ef5fde5b5b16ed->leave($__internal_1d3de1d176f0a8fd334f89f816a504fd13ca5216a64868fe75ef5fde5b5b16ed_prof);

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

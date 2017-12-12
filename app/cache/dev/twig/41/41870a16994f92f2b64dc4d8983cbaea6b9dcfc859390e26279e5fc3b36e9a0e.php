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
        $__internal_feffdf3b3aaffb9f1f5b416a89fde4ecf34c43adf1acc7385b0a8bea41c015c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feffdf3b3aaffb9f1f5b416a89fde4ecf34c43adf1acc7385b0a8bea41c015c9->enter($__internal_feffdf3b3aaffb9f1f5b416a89fde4ecf34c43adf1acc7385b0a8bea41c015c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feffdf3b3aaffb9f1f5b416a89fde4ecf34c43adf1acc7385b0a8bea41c015c9->leave($__internal_feffdf3b3aaffb9f1f5b416a89fde4ecf34c43adf1acc7385b0a8bea41c015c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe4e327ab53314d677e31dea1d496ac8589130ae511a018b8565cf028d05d730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4e327ab53314d677e31dea1d496ac8589130ae511a018b8565cf028d05d730->enter($__internal_fe4e327ab53314d677e31dea1d496ac8589130ae511a018b8565cf028d05d730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fe4e327ab53314d677e31dea1d496ac8589130ae511a018b8565cf028d05d730->leave($__internal_fe4e327ab53314d677e31dea1d496ac8589130ae511a018b8565cf028d05d730_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_713a45ebd5154ab3a7d65a37a827fdcfdc30d47286edbff85a9b73ba5773511b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713a45ebd5154ab3a7d65a37a827fdcfdc30d47286edbff85a9b73ba5773511b->enter($__internal_713a45ebd5154ab3a7d65a37a827fdcfdc30d47286edbff85a9b73ba5773511b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_713a45ebd5154ab3a7d65a37a827fdcfdc30d47286edbff85a9b73ba5773511b->leave($__internal_713a45ebd5154ab3a7d65a37a827fdcfdc30d47286edbff85a9b73ba5773511b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4c8819d57b34911c24be7ad0db01ef91dd21c6312077597c5b56f8644e0e58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c8819d57b34911c24be7ad0db01ef91dd21c6312077597c5b56f8644e0e58e->enter($__internal_c4c8819d57b34911c24be7ad0db01ef91dd21c6312077597c5b56f8644e0e58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c4c8819d57b34911c24be7ad0db01ef91dd21c6312077597c5b56f8644e0e58e->leave($__internal_c4c8819d57b34911c24be7ad0db01ef91dd21c6312077597c5b56f8644e0e58e_prof);

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

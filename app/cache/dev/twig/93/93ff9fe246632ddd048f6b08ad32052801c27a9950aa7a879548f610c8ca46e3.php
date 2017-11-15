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
        $__internal_a10334b8a462444f4fed8fd6ebe62d452da95ee8dcd09fea0f61c618c0f4db10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10334b8a462444f4fed8fd6ebe62d452da95ee8dcd09fea0f61c618c0f4db10->enter($__internal_a10334b8a462444f4fed8fd6ebe62d452da95ee8dcd09fea0f61c618c0f4db10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a10334b8a462444f4fed8fd6ebe62d452da95ee8dcd09fea0f61c618c0f4db10->leave($__internal_a10334b8a462444f4fed8fd6ebe62d452da95ee8dcd09fea0f61c618c0f4db10_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b34d57deeb8e944d0c1b7a9509f07d89462b80be816d2029e8a5f5328190880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b34d57deeb8e944d0c1b7a9509f07d89462b80be816d2029e8a5f5328190880->enter($__internal_9b34d57deeb8e944d0c1b7a9509f07d89462b80be816d2029e8a5f5328190880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9b34d57deeb8e944d0c1b7a9509f07d89462b80be816d2029e8a5f5328190880->leave($__internal_9b34d57deeb8e944d0c1b7a9509f07d89462b80be816d2029e8a5f5328190880_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf27d4c9d251429c4e3f8ae817154bab018452546ae8b3aa6af82ec8c16a16c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf27d4c9d251429c4e3f8ae817154bab018452546ae8b3aa6af82ec8c16a16c0->enter($__internal_cf27d4c9d251429c4e3f8ae817154bab018452546ae8b3aa6af82ec8c16a16c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cf27d4c9d251429c4e3f8ae817154bab018452546ae8b3aa6af82ec8c16a16c0->leave($__internal_cf27d4c9d251429c4e3f8ae817154bab018452546ae8b3aa6af82ec8c16a16c0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8677f5c5ac37d4b7873ab1b1b1c644500a8c53c926489814c0152e26b9ed2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8677f5c5ac37d4b7873ab1b1b1c644500a8c53c926489814c0152e26b9ed2f7->enter($__internal_c8677f5c5ac37d4b7873ab1b1b1c644500a8c53c926489814c0152e26b9ed2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c8677f5c5ac37d4b7873ab1b1b1c644500a8c53c926489814c0152e26b9ed2f7->leave($__internal_c8677f5c5ac37d4b7873ab1b1b1c644500a8c53c926489814c0152e26b9ed2f7_prof);

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

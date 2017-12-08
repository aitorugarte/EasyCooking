<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_60fa8c80a06f1df51676d53232fb2e0e1a84533aae91da00463905873205bb1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d02109a97c7ea8d5fcee8cc8b57e66f384aff66eef6642d46c1810ec2c601ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d02109a97c7ea8d5fcee8cc8b57e66f384aff66eef6642d46c1810ec2c601ba->enter($__internal_6d02109a97c7ea8d5fcee8cc8b57e66f384aff66eef6642d46c1810ec2c601ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d02109a97c7ea8d5fcee8cc8b57e66f384aff66eef6642d46c1810ec2c601ba->leave($__internal_6d02109a97c7ea8d5fcee8cc8b57e66f384aff66eef6642d46c1810ec2c601ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_46cd4eed74fffa784dc43263d880798d9c8065f05aa0757aeab48207fbd17cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46cd4eed74fffa784dc43263d880798d9c8065f05aa0757aeab48207fbd17cae->enter($__internal_46cd4eed74fffa784dc43263d880798d9c8065f05aa0757aeab48207fbd17cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_46cd4eed74fffa784dc43263d880798d9c8065f05aa0757aeab48207fbd17cae->leave($__internal_46cd4eed74fffa784dc43263d880798d9c8065f05aa0757aeab48207fbd17cae_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_75e93538f5580466d98aa69bdee31759a4d13f5ecabdb30a69e7efac48b7bb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e93538f5580466d98aa69bdee31759a4d13f5ecabdb30a69e7efac48b7bb44->enter($__internal_75e93538f5580466d98aa69bdee31759a4d13f5ecabdb30a69e7efac48b7bb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_75e93538f5580466d98aa69bdee31759a4d13f5ecabdb30a69e7efac48b7bb44->leave($__internal_75e93538f5580466d98aa69bdee31759a4d13f5ecabdb30a69e7efac48b7bb44_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8e7ab1f998a3b227a34cc2beb304f21d5ae217d4d2f975005efd16aa9f1672b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e7ab1f998a3b227a34cc2beb304f21d5ae217d4d2f975005efd16aa9f1672b->enter($__internal_b8e7ab1f998a3b227a34cc2beb304f21d5ae217d4d2f975005efd16aa9f1672b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_b8e7ab1f998a3b227a34cc2beb304f21d5ae217d4d2f975005efd16aa9f1672b->leave($__internal_b8e7ab1f998a3b227a34cc2beb304f21d5ae217d4d2f975005efd16aa9f1672b_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_6d472eb56435d4368696603a4c97be491cce28da37cf666f63af56bdbee6a762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d472eb56435d4368696603a4c97be491cce28da37cf666f63af56bdbee6a762->enter($__internal_6d472eb56435d4368696603a4c97be491cce28da37cf666f63af56bdbee6a762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6d472eb56435d4368696603a4c97be491cce28da37cf666f63af56bdbee6a762->leave($__internal_6d472eb56435d4368696603a4c97be491cce28da37cf666f63af56bdbee6a762_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}

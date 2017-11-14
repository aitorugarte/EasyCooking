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
        $__internal_a31b114bb78ef82b19c7e2a547c2a4e26a8aee8ae1caf4aadf57fad81ce5f1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31b114bb78ef82b19c7e2a547c2a4e26a8aee8ae1caf4aadf57fad81ce5f1e4->enter($__internal_a31b114bb78ef82b19c7e2a547c2a4e26a8aee8ae1caf4aadf57fad81ce5f1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a31b114bb78ef82b19c7e2a547c2a4e26a8aee8ae1caf4aadf57fad81ce5f1e4->leave($__internal_a31b114bb78ef82b19c7e2a547c2a4e26a8aee8ae1caf4aadf57fad81ce5f1e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6127752a06c2eb05169d20711e6f6985e0eb8109071c97a82b431257fff0fc06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6127752a06c2eb05169d20711e6f6985e0eb8109071c97a82b431257fff0fc06->enter($__internal_6127752a06c2eb05169d20711e6f6985e0eb8109071c97a82b431257fff0fc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6127752a06c2eb05169d20711e6f6985e0eb8109071c97a82b431257fff0fc06->leave($__internal_6127752a06c2eb05169d20711e6f6985e0eb8109071c97a82b431257fff0fc06_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d1c45eff5d946ace58cea78ca634ebca30b42c71ef703caf41e76b3fc5cbbd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1c45eff5d946ace58cea78ca634ebca30b42c71ef703caf41e76b3fc5cbbd6->enter($__internal_1d1c45eff5d946ace58cea78ca634ebca30b42c71ef703caf41e76b3fc5cbbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_1d1c45eff5d946ace58cea78ca634ebca30b42c71ef703caf41e76b3fc5cbbd6->leave($__internal_1d1c45eff5d946ace58cea78ca634ebca30b42c71ef703caf41e76b3fc5cbbd6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b451dcddd7e7403fbfad0e8bdba0bb0968f8387abcb263ed9264203347cfcc04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b451dcddd7e7403fbfad0e8bdba0bb0968f8387abcb263ed9264203347cfcc04->enter($__internal_b451dcddd7e7403fbfad0e8bdba0bb0968f8387abcb263ed9264203347cfcc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b451dcddd7e7403fbfad0e8bdba0bb0968f8387abcb263ed9264203347cfcc04->leave($__internal_b451dcddd7e7403fbfad0e8bdba0bb0968f8387abcb263ed9264203347cfcc04_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_0b5f2ea5aa09897b269aea8637d004b081341f3a4a80ae0ccae093e1ea3b6bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5f2ea5aa09897b269aea8637d004b081341f3a4a80ae0ccae093e1ea3b6bc3->enter($__internal_0b5f2ea5aa09897b269aea8637d004b081341f3a4a80ae0ccae093e1ea3b6bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0b5f2ea5aa09897b269aea8637d004b081341f3a4a80ae0ccae093e1ea3b6bc3->leave($__internal_0b5f2ea5aa09897b269aea8637d004b081341f3a4a80ae0ccae093e1ea3b6bc3_prof);

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

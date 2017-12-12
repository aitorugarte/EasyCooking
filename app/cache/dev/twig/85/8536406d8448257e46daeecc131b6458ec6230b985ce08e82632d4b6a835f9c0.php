<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_9c591f7752e12960e66c9d089d1fea62b11cd33c8cecf47955510b8299081b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
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
        $__internal_1ab59bdc25a98f4b0e58537ed4241d64a04f9b073e6d4e0b646b47be44e5887a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab59bdc25a98f4b0e58537ed4241d64a04f9b073e6d4e0b646b47be44e5887a->enter($__internal_1ab59bdc25a98f4b0e58537ed4241d64a04f9b073e6d4e0b646b47be44e5887a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ab59bdc25a98f4b0e58537ed4241d64a04f9b073e6d4e0b646b47be44e5887a->leave($__internal_1ab59bdc25a98f4b0e58537ed4241d64a04f9b073e6d4e0b646b47be44e5887a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b47691210d593b8ec716d0a9e5424a9ca469cea4958419f1bfba66db6219bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b47691210d593b8ec716d0a9e5424a9ca469cea4958419f1bfba66db6219bd8->enter($__internal_4b47691210d593b8ec716d0a9e5424a9ca469cea4958419f1bfba66db6219bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_4b47691210d593b8ec716d0a9e5424a9ca469cea4958419f1bfba66db6219bd8->leave($__internal_4b47691210d593b8ec716d0a9e5424a9ca469cea4958419f1bfba66db6219bd8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8da22f522d3316e6cef94497531e7d718931ee2562d9814cebd5ce954effeee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da22f522d3316e6cef94497531e7d718931ee2562d9814cebd5ce954effeee5->enter($__internal_8da22f522d3316e6cef94497531e7d718931ee2562d9814cebd5ce954effeee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_8da22f522d3316e6cef94497531e7d718931ee2562d9814cebd5ce954effeee5->leave($__internal_8da22f522d3316e6cef94497531e7d718931ee2562d9814cebd5ce954effeee5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ecd26722596ea95e5c0b109978a8802c053961f8c6e641793128faeed6980e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ecd26722596ea95e5c0b109978a8802c053961f8c6e641793128faeed6980e7->enter($__internal_6ecd26722596ea95e5c0b109978a8802c053961f8c6e641793128faeed6980e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6ecd26722596ea95e5c0b109978a8802c053961f8c6e641793128faeed6980e7->leave($__internal_6ecd26722596ea95e5c0b109978a8802c053961f8c6e641793128faeed6980e7_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_357f0dd6e6be63ac28c276d3099f2668296685eb7c63ba02daa8f8ae907558b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357f0dd6e6be63ac28c276d3099f2668296685eb7c63ba02daa8f8ae907558b9->enter($__internal_357f0dd6e6be63ac28c276d3099f2668296685eb7c63ba02daa8f8ae907558b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_357f0dd6e6be63ac28c276d3099f2668296685eb7c63ba02daa8f8ae907558b9->leave($__internal_357f0dd6e6be63ac28c276d3099f2668296685eb7c63ba02daa8f8ae907558b9_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
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
", "@SensioDistribution/Configurator/layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }
}

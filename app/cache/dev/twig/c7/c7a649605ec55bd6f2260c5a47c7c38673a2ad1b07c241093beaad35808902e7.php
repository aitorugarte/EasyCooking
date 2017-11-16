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
        $__internal_d753a0b18e094a92aee38f445d0f6f95c33381f6c56448453e3499ebc6b918bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d753a0b18e094a92aee38f445d0f6f95c33381f6c56448453e3499ebc6b918bf->enter($__internal_d753a0b18e094a92aee38f445d0f6f95c33381f6c56448453e3499ebc6b918bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d753a0b18e094a92aee38f445d0f6f95c33381f6c56448453e3499ebc6b918bf->leave($__internal_d753a0b18e094a92aee38f445d0f6f95c33381f6c56448453e3499ebc6b918bf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_082b92e9f6b67cb1c73ad5774beadbb9f7e7ae613a8e20015183b96e34854001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082b92e9f6b67cb1c73ad5774beadbb9f7e7ae613a8e20015183b96e34854001->enter($__internal_082b92e9f6b67cb1c73ad5774beadbb9f7e7ae613a8e20015183b96e34854001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_082b92e9f6b67cb1c73ad5774beadbb9f7e7ae613a8e20015183b96e34854001->leave($__internal_082b92e9f6b67cb1c73ad5774beadbb9f7e7ae613a8e20015183b96e34854001_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_80c9514ba9b93db05e5444b71a4b7504db1c5f25ed5edd1d4e89042a22152ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c9514ba9b93db05e5444b71a4b7504db1c5f25ed5edd1d4e89042a22152ff1->enter($__internal_80c9514ba9b93db05e5444b71a4b7504db1c5f25ed5edd1d4e89042a22152ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_80c9514ba9b93db05e5444b71a4b7504db1c5f25ed5edd1d4e89042a22152ff1->leave($__internal_80c9514ba9b93db05e5444b71a4b7504db1c5f25ed5edd1d4e89042a22152ff1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d175b599d5ecc6b9e533070c274038e7eb2afb708e7cd228da32c940bffd41d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d175b599d5ecc6b9e533070c274038e7eb2afb708e7cd228da32c940bffd41d2->enter($__internal_d175b599d5ecc6b9e533070c274038e7eb2afb708e7cd228da32c940bffd41d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d175b599d5ecc6b9e533070c274038e7eb2afb708e7cd228da32c940bffd41d2->leave($__internal_d175b599d5ecc6b9e533070c274038e7eb2afb708e7cd228da32c940bffd41d2_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_58b811c8a992a36fcc372a14be76944d31d70e8acd6445d7d3a4e9ef4f721916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b811c8a992a36fcc372a14be76944d31d70e8acd6445d7d3a4e9ef4f721916->enter($__internal_58b811c8a992a36fcc372a14be76944d31d70e8acd6445d7d3a4e9ef4f721916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_58b811c8a992a36fcc372a14be76944d31d70e8acd6445d7d3a4e9ef4f721916->leave($__internal_58b811c8a992a36fcc372a14be76944d31d70e8acd6445d7d3a4e9ef4f721916_prof);

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

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
        $__internal_f784924701555226b6402570c250b08d50526d9f4440f5a75eac67ba92e64b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f784924701555226b6402570c250b08d50526d9f4440f5a75eac67ba92e64b75->enter($__internal_f784924701555226b6402570c250b08d50526d9f4440f5a75eac67ba92e64b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f784924701555226b6402570c250b08d50526d9f4440f5a75eac67ba92e64b75->leave($__internal_f784924701555226b6402570c250b08d50526d9f4440f5a75eac67ba92e64b75_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bee61cd04fbc7555963182bc79f11c8d224933b16205dc78f171e721021d2956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee61cd04fbc7555963182bc79f11c8d224933b16205dc78f171e721021d2956->enter($__internal_bee61cd04fbc7555963182bc79f11c8d224933b16205dc78f171e721021d2956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_bee61cd04fbc7555963182bc79f11c8d224933b16205dc78f171e721021d2956->leave($__internal_bee61cd04fbc7555963182bc79f11c8d224933b16205dc78f171e721021d2956_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_db3766e497d0dc23d35dd42aee0c2b4e6c86278a207851d93864de3b261cd044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3766e497d0dc23d35dd42aee0c2b4e6c86278a207851d93864de3b261cd044->enter($__internal_db3766e497d0dc23d35dd42aee0c2b4e6c86278a207851d93864de3b261cd044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_db3766e497d0dc23d35dd42aee0c2b4e6c86278a207851d93864de3b261cd044->leave($__internal_db3766e497d0dc23d35dd42aee0c2b4e6c86278a207851d93864de3b261cd044_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_93af86e744c892e75d786aaed022e2b7febc065d00ce3d2e1c1fc727df231fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93af86e744c892e75d786aaed022e2b7febc065d00ce3d2e1c1fc727df231fbc->enter($__internal_93af86e744c892e75d786aaed022e2b7febc065d00ce3d2e1c1fc727df231fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_93af86e744c892e75d786aaed022e2b7febc065d00ce3d2e1c1fc727df231fbc->leave($__internal_93af86e744c892e75d786aaed022e2b7febc065d00ce3d2e1c1fc727df231fbc_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_2e54df05bd083df0f41ad950d6d27212d80c2ffc785c5b6d592032d279086d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e54df05bd083df0f41ad950d6d27212d80c2ffc785c5b6d592032d279086d04->enter($__internal_2e54df05bd083df0f41ad950d6d27212d80c2ffc785c5b6d592032d279086d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_2e54df05bd083df0f41ad950d6d27212d80c2ffc785c5b6d592032d279086d04->leave($__internal_2e54df05bd083df0f41ad950d6d27212d80c2ffc785c5b6d592032d279086d04_prof);

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

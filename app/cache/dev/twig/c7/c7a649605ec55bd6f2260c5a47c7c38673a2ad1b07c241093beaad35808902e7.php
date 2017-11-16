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
        $__internal_d840138a8081f9cca1ab4e57a161c5a9192f1aa84a1dcef6bc0f8922e4fd46ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d840138a8081f9cca1ab4e57a161c5a9192f1aa84a1dcef6bc0f8922e4fd46ed->enter($__internal_d840138a8081f9cca1ab4e57a161c5a9192f1aa84a1dcef6bc0f8922e4fd46ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d840138a8081f9cca1ab4e57a161c5a9192f1aa84a1dcef6bc0f8922e4fd46ed->leave($__internal_d840138a8081f9cca1ab4e57a161c5a9192f1aa84a1dcef6bc0f8922e4fd46ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc85e19ad79e548b7ede3672421e8c71dca48a74e99710cc72e7deeb4a3931be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc85e19ad79e548b7ede3672421e8c71dca48a74e99710cc72e7deeb4a3931be->enter($__internal_fc85e19ad79e548b7ede3672421e8c71dca48a74e99710cc72e7deeb4a3931be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_fc85e19ad79e548b7ede3672421e8c71dca48a74e99710cc72e7deeb4a3931be->leave($__internal_fc85e19ad79e548b7ede3672421e8c71dca48a74e99710cc72e7deeb4a3931be_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_918bbd014468c19321419792ba55c82092ea0cf13f196e95fa2c0febac61a843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918bbd014468c19321419792ba55c82092ea0cf13f196e95fa2c0febac61a843->enter($__internal_918bbd014468c19321419792ba55c82092ea0cf13f196e95fa2c0febac61a843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_918bbd014468c19321419792ba55c82092ea0cf13f196e95fa2c0febac61a843->leave($__internal_918bbd014468c19321419792ba55c82092ea0cf13f196e95fa2c0febac61a843_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dac38e8ce47105530ffc4c99e7e4a0445241febec264fcb09c2da22b2d60c22b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac38e8ce47105530ffc4c99e7e4a0445241febec264fcb09c2da22b2d60c22b->enter($__internal_dac38e8ce47105530ffc4c99e7e4a0445241febec264fcb09c2da22b2d60c22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dac38e8ce47105530ffc4c99e7e4a0445241febec264fcb09c2da22b2d60c22b->leave($__internal_dac38e8ce47105530ffc4c99e7e4a0445241febec264fcb09c2da22b2d60c22b_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_42d42ccc36fade91ca67ac5d3d4897dff8e322e462a5895d2790161a499c079c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d42ccc36fade91ca67ac5d3d4897dff8e322e462a5895d2790161a499c079c->enter($__internal_42d42ccc36fade91ca67ac5d3d4897dff8e322e462a5895d2790161a499c079c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_42d42ccc36fade91ca67ac5d3d4897dff8e322e462a5895d2790161a499c079c->leave($__internal_42d42ccc36fade91ca67ac5d3d4897dff8e322e462a5895d2790161a499c079c_prof);

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

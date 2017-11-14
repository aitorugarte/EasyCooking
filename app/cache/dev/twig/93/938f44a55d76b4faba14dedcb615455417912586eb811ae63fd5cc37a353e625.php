<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_6eb0441d2f8f3a515c5fb04276bb1016e18c84f2d1b3a5c6657f707419a34563 extends Twig_Template
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
        $__internal_91c80e954757358a1a184268ba4d7a7feed3fd0665c2e6471680bddd66df98c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c80e954757358a1a184268ba4d7a7feed3fd0665c2e6471680bddd66df98c5->enter($__internal_91c80e954757358a1a184268ba4d7a7feed3fd0665c2e6471680bddd66df98c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91c80e954757358a1a184268ba4d7a7feed3fd0665c2e6471680bddd66df98c5->leave($__internal_91c80e954757358a1a184268ba4d7a7feed3fd0665c2e6471680bddd66df98c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_592c59354263e1a03f025b7a225a86d85e9b1d42f78403dc69181b6190572870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592c59354263e1a03f025b7a225a86d85e9b1d42f78403dc69181b6190572870->enter($__internal_592c59354263e1a03f025b7a225a86d85e9b1d42f78403dc69181b6190572870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_592c59354263e1a03f025b7a225a86d85e9b1d42f78403dc69181b6190572870->leave($__internal_592c59354263e1a03f025b7a225a86d85e9b1d42f78403dc69181b6190572870_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecdebdb72e151fa6da22b39d61d00ebe6d8013d79e8fc411c63ecb8cb33ba990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecdebdb72e151fa6da22b39d61d00ebe6d8013d79e8fc411c63ecb8cb33ba990->enter($__internal_ecdebdb72e151fa6da22b39d61d00ebe6d8013d79e8fc411c63ecb8cb33ba990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_ecdebdb72e151fa6da22b39d61d00ebe6d8013d79e8fc411c63ecb8cb33ba990->leave($__internal_ecdebdb72e151fa6da22b39d61d00ebe6d8013d79e8fc411c63ecb8cb33ba990_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_719db13dfd386baa395a98b876f4b81ee678c3c4389f67e3d59b14b4a74cc044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719db13dfd386baa395a98b876f4b81ee678c3c4389f67e3d59b14b4a74cc044->enter($__internal_719db13dfd386baa395a98b876f4b81ee678c3c4389f67e3d59b14b4a74cc044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_719db13dfd386baa395a98b876f4b81ee678c3c4389f67e3d59b14b4a74cc044->leave($__internal_719db13dfd386baa395a98b876f4b81ee678c3c4389f67e3d59b14b4a74cc044_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ff82dd84ddb1a82c03876af0f83ba33e86cfbd4cf718cb9b969382b0a23040c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff82dd84ddb1a82c03876af0f83ba33e86cfbd4cf718cb9b969382b0a23040c6->enter($__internal_ff82dd84ddb1a82c03876af0f83ba33e86cfbd4cf718cb9b969382b0a23040c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ff82dd84ddb1a82c03876af0f83ba33e86cfbd4cf718cb9b969382b0a23040c6->leave($__internal_ff82dd84ddb1a82c03876af0f83ba33e86cfbd4cf718cb9b969382b0a23040c6_prof);

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

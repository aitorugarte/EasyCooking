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
        $__internal_89f896ca27db9310fa2790fa4b681851f10ab3b667e6ea62a19c8685628949a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f896ca27db9310fa2790fa4b681851f10ab3b667e6ea62a19c8685628949a6->enter($__internal_89f896ca27db9310fa2790fa4b681851f10ab3b667e6ea62a19c8685628949a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89f896ca27db9310fa2790fa4b681851f10ab3b667e6ea62a19c8685628949a6->leave($__internal_89f896ca27db9310fa2790fa4b681851f10ab3b667e6ea62a19c8685628949a6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a19893a382fbfb8ef0636dd237b6a12009aaef841b98c2c91f513cc0c27c2544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19893a382fbfb8ef0636dd237b6a12009aaef841b98c2c91f513cc0c27c2544->enter($__internal_a19893a382fbfb8ef0636dd237b6a12009aaef841b98c2c91f513cc0c27c2544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a19893a382fbfb8ef0636dd237b6a12009aaef841b98c2c91f513cc0c27c2544->leave($__internal_a19893a382fbfb8ef0636dd237b6a12009aaef841b98c2c91f513cc0c27c2544_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb51e6db344ed43d390c4a08c5449583b2905a81a7fd0c67a82c249c07f36b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb51e6db344ed43d390c4a08c5449583b2905a81a7fd0c67a82c249c07f36b28->enter($__internal_bb51e6db344ed43d390c4a08c5449583b2905a81a7fd0c67a82c249c07f36b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_bb51e6db344ed43d390c4a08c5449583b2905a81a7fd0c67a82c249c07f36b28->leave($__internal_bb51e6db344ed43d390c4a08c5449583b2905a81a7fd0c67a82c249c07f36b28_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b3f5fe981239861cd00de8fd77e5514b2c8fc28a13e6e30597c5337f3bddd33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3f5fe981239861cd00de8fd77e5514b2c8fc28a13e6e30597c5337f3bddd33->enter($__internal_4b3f5fe981239861cd00de8fd77e5514b2c8fc28a13e6e30597c5337f3bddd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4b3f5fe981239861cd00de8fd77e5514b2c8fc28a13e6e30597c5337f3bddd33->leave($__internal_4b3f5fe981239861cd00de8fd77e5514b2c8fc28a13e6e30597c5337f3bddd33_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_b9a945848f1dea9551e4842cbd12a473a8ad2d553706a7c1ec255a250714f13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a945848f1dea9551e4842cbd12a473a8ad2d553706a7c1ec255a250714f13d->enter($__internal_b9a945848f1dea9551e4842cbd12a473a8ad2d553706a7c1ec255a250714f13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b9a945848f1dea9551e4842cbd12a473a8ad2d553706a7c1ec255a250714f13d->leave($__internal_b9a945848f1dea9551e4842cbd12a473a8ad2d553706a7c1ec255a250714f13d_prof);

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

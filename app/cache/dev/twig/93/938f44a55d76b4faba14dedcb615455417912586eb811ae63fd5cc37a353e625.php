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
        $__internal_8d97e028a003282cabcdc82acf9d5f3be9b1022a276bcbbbbed80a32bb459050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d97e028a003282cabcdc82acf9d5f3be9b1022a276bcbbbbed80a32bb459050->enter($__internal_8d97e028a003282cabcdc82acf9d5f3be9b1022a276bcbbbbed80a32bb459050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d97e028a003282cabcdc82acf9d5f3be9b1022a276bcbbbbed80a32bb459050->leave($__internal_8d97e028a003282cabcdc82acf9d5f3be9b1022a276bcbbbbed80a32bb459050_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ddfdfe0d7864b7620f6ecd1379efb3802ebc7a892dd865fe0205e39a7e46419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ddfdfe0d7864b7620f6ecd1379efb3802ebc7a892dd865fe0205e39a7e46419->enter($__internal_9ddfdfe0d7864b7620f6ecd1379efb3802ebc7a892dd865fe0205e39a7e46419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_9ddfdfe0d7864b7620f6ecd1379efb3802ebc7a892dd865fe0205e39a7e46419->leave($__internal_9ddfdfe0d7864b7620f6ecd1379efb3802ebc7a892dd865fe0205e39a7e46419_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_58fa1dc81000e8a44b0d7a5e5f60da56252b48fe99546f9c4e03972def6aa4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fa1dc81000e8a44b0d7a5e5f60da56252b48fe99546f9c4e03972def6aa4da->enter($__internal_58fa1dc81000e8a44b0d7a5e5f60da56252b48fe99546f9c4e03972def6aa4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_58fa1dc81000e8a44b0d7a5e5f60da56252b48fe99546f9c4e03972def6aa4da->leave($__internal_58fa1dc81000e8a44b0d7a5e5f60da56252b48fe99546f9c4e03972def6aa4da_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc046be7437fdfa28a30ae0a09c9ee7177fbd08398fa62a58a616fa66d007a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc046be7437fdfa28a30ae0a09c9ee7177fbd08398fa62a58a616fa66d007a5a->enter($__internal_fc046be7437fdfa28a30ae0a09c9ee7177fbd08398fa62a58a616fa66d007a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fc046be7437fdfa28a30ae0a09c9ee7177fbd08398fa62a58a616fa66d007a5a->leave($__internal_fc046be7437fdfa28a30ae0a09c9ee7177fbd08398fa62a58a616fa66d007a5a_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_097219272e6e6da063631e738705913944d9d2c050aaf581ea6c526a9e259705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097219272e6e6da063631e738705913944d9d2c050aaf581ea6c526a9e259705->enter($__internal_097219272e6e6da063631e738705913944d9d2c050aaf581ea6c526a9e259705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_097219272e6e6da063631e738705913944d9d2c050aaf581ea6c526a9e259705->leave($__internal_097219272e6e6da063631e738705913944d9d2c050aaf581ea6c526a9e259705_prof);

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

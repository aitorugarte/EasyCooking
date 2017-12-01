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
        $__internal_36a825ffa8943f86d2347c2f0110c362a02ee5f39d8075bd065a0f16a6220573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a825ffa8943f86d2347c2f0110c362a02ee5f39d8075bd065a0f16a6220573->enter($__internal_36a825ffa8943f86d2347c2f0110c362a02ee5f39d8075bd065a0f16a6220573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36a825ffa8943f86d2347c2f0110c362a02ee5f39d8075bd065a0f16a6220573->leave($__internal_36a825ffa8943f86d2347c2f0110c362a02ee5f39d8075bd065a0f16a6220573_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_110c5b358eb9fa9d85b1c89fc7b256dc101bc8bc2c990b9181cb73ce79f236fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110c5b358eb9fa9d85b1c89fc7b256dc101bc8bc2c990b9181cb73ce79f236fa->enter($__internal_110c5b358eb9fa9d85b1c89fc7b256dc101bc8bc2c990b9181cb73ce79f236fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_110c5b358eb9fa9d85b1c89fc7b256dc101bc8bc2c990b9181cb73ce79f236fa->leave($__internal_110c5b358eb9fa9d85b1c89fc7b256dc101bc8bc2c990b9181cb73ce79f236fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cc2db71852718aecacfc43936553d1df45edb0dcca7f3b21fe4948948027908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc2db71852718aecacfc43936553d1df45edb0dcca7f3b21fe4948948027908->enter($__internal_9cc2db71852718aecacfc43936553d1df45edb0dcca7f3b21fe4948948027908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_9cc2db71852718aecacfc43936553d1df45edb0dcca7f3b21fe4948948027908->leave($__internal_9cc2db71852718aecacfc43936553d1df45edb0dcca7f3b21fe4948948027908_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ff3bfd2f9cc716d5c4d2f3024fd99b76ef5077065b896f153bd9237749c85f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff3bfd2f9cc716d5c4d2f3024fd99b76ef5077065b896f153bd9237749c85f0->enter($__internal_8ff3bfd2f9cc716d5c4d2f3024fd99b76ef5077065b896f153bd9237749c85f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8ff3bfd2f9cc716d5c4d2f3024fd99b76ef5077065b896f153bd9237749c85f0->leave($__internal_8ff3bfd2f9cc716d5c4d2f3024fd99b76ef5077065b896f153bd9237749c85f0_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a44a412d10e59424f9881bd30e895aed14f277430d4a667e248e257d2bd5006c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44a412d10e59424f9881bd30e895aed14f277430d4a667e248e257d2bd5006c->enter($__internal_a44a412d10e59424f9881bd30e895aed14f277430d4a667e248e257d2bd5006c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a44a412d10e59424f9881bd30e895aed14f277430d4a667e248e257d2bd5006c->leave($__internal_a44a412d10e59424f9881bd30e895aed14f277430d4a667e248e257d2bd5006c_prof);

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
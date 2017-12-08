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
        $__internal_593f4355b777afb32a4016a4c928a4e27e635b1686c8cd7dced8b63813050dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593f4355b777afb32a4016a4c928a4e27e635b1686c8cd7dced8b63813050dad->enter($__internal_593f4355b777afb32a4016a4c928a4e27e635b1686c8cd7dced8b63813050dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_593f4355b777afb32a4016a4c928a4e27e635b1686c8cd7dced8b63813050dad->leave($__internal_593f4355b777afb32a4016a4c928a4e27e635b1686c8cd7dced8b63813050dad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d3821a584bf7f2bc14bb6d3f373a277fc7e12bd35d8b627bd948430bbb561d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3821a584bf7f2bc14bb6d3f373a277fc7e12bd35d8b627bd948430bbb561d7->enter($__internal_3d3821a584bf7f2bc14bb6d3f373a277fc7e12bd35d8b627bd948430bbb561d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_3d3821a584bf7f2bc14bb6d3f373a277fc7e12bd35d8b627bd948430bbb561d7->leave($__internal_3d3821a584bf7f2bc14bb6d3f373a277fc7e12bd35d8b627bd948430bbb561d7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7dccb242a8990c3c9b465fe272dd42960d4a1280ed6bd3e788e7a2bbda2a71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7dccb242a8990c3c9b465fe272dd42960d4a1280ed6bd3e788e7a2bbda2a71c->enter($__internal_c7dccb242a8990c3c9b465fe272dd42960d4a1280ed6bd3e788e7a2bbda2a71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c7dccb242a8990c3c9b465fe272dd42960d4a1280ed6bd3e788e7a2bbda2a71c->leave($__internal_c7dccb242a8990c3c9b465fe272dd42960d4a1280ed6bd3e788e7a2bbda2a71c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c90ce4188b472b83cf00625ca4f9ec6db9b56dcf019492bcee9de6ceaebec0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c90ce4188b472b83cf00625ca4f9ec6db9b56dcf019492bcee9de6ceaebec0e->enter($__internal_9c90ce4188b472b83cf00625ca4f9ec6db9b56dcf019492bcee9de6ceaebec0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9c90ce4188b472b83cf00625ca4f9ec6db9b56dcf019492bcee9de6ceaebec0e->leave($__internal_9c90ce4188b472b83cf00625ca4f9ec6db9b56dcf019492bcee9de6ceaebec0e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_369c9a2c5fdf420926ef716ad176cd42c96fc98afc77c7819e78d87dfa9f52dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369c9a2c5fdf420926ef716ad176cd42c96fc98afc77c7819e78d87dfa9f52dc->enter($__internal_369c9a2c5fdf420926ef716ad176cd42c96fc98afc77c7819e78d87dfa9f52dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_369c9a2c5fdf420926ef716ad176cd42c96fc98afc77c7819e78d87dfa9f52dc->leave($__internal_369c9a2c5fdf420926ef716ad176cd42c96fc98afc77c7819e78d87dfa9f52dc_prof);

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

<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_a82435d44d5712b0b8a57d0bb3ef5699e2369fd037fe0e8f85e1e168b5c3d6bf extends Twig_Template
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
        $__internal_d5f3d5b75506924901106c15c6058b121884c5efc04ef635bdb03adad0d0a907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f3d5b75506924901106c15c6058b121884c5efc04ef635bdb03adad0d0a907->enter($__internal_d5f3d5b75506924901106c15c6058b121884c5efc04ef635bdb03adad0d0a907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5f3d5b75506924901106c15c6058b121884c5efc04ef635bdb03adad0d0a907->leave($__internal_d5f3d5b75506924901106c15c6058b121884c5efc04ef635bdb03adad0d0a907_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8a537fff3ba1a234de465c36ed3c2bb1c53bea2b162d6e049e789dfec8bb3655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a537fff3ba1a234de465c36ed3c2bb1c53bea2b162d6e049e789dfec8bb3655->enter($__internal_8a537fff3ba1a234de465c36ed3c2bb1c53bea2b162d6e049e789dfec8bb3655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_8a537fff3ba1a234de465c36ed3c2bb1c53bea2b162d6e049e789dfec8bb3655->leave($__internal_8a537fff3ba1a234de465c36ed3c2bb1c53bea2b162d6e049e789dfec8bb3655_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_634b96ff0c41f20591a18f4b4caa339389a0c17c2f826a9583ff0280454dd1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634b96ff0c41f20591a18f4b4caa339389a0c17c2f826a9583ff0280454dd1d0->enter($__internal_634b96ff0c41f20591a18f4b4caa339389a0c17c2f826a9583ff0280454dd1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_634b96ff0c41f20591a18f4b4caa339389a0c17c2f826a9583ff0280454dd1d0->leave($__internal_634b96ff0c41f20591a18f4b4caa339389a0c17c2f826a9583ff0280454dd1d0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d83e0d05165ce8ae5f1fcc014f334727b398837aad822b02566bcb535255f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d83e0d05165ce8ae5f1fcc014f334727b398837aad822b02566bcb535255f43->enter($__internal_7d83e0d05165ce8ae5f1fcc014f334727b398837aad822b02566bcb535255f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7d83e0d05165ce8ae5f1fcc014f334727b398837aad822b02566bcb535255f43->leave($__internal_7d83e0d05165ce8ae5f1fcc014f334727b398837aad822b02566bcb535255f43_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ad9c3cfe7e1aed7fe6c37bd7ff40cbbb44e4c8bbd89fc0ccd0c21da6e1ce76e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9c3cfe7e1aed7fe6c37bd7ff40cbbb44e4c8bbd89fc0ccd0c21da6e1ce76e5->enter($__internal_ad9c3cfe7e1aed7fe6c37bd7ff40cbbb44e4c8bbd89fc0ccd0c21da6e1ce76e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ad9c3cfe7e1aed7fe6c37bd7ff40cbbb44e4c8bbd89fc0ccd0c21da6e1ce76e5->leave($__internal_ad9c3cfe7e1aed7fe6c37bd7ff40cbbb44e4c8bbd89fc0ccd0c21da6e1ce76e5_prof);

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

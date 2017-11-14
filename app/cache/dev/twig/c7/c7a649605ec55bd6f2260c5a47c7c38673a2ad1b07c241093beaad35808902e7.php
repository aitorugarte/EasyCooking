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
        $__internal_d51ff179a086bfece14ed39e57f016e5af7e3575dc6341ec26d77c3cbb2edf86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51ff179a086bfece14ed39e57f016e5af7e3575dc6341ec26d77c3cbb2edf86->enter($__internal_d51ff179a086bfece14ed39e57f016e5af7e3575dc6341ec26d77c3cbb2edf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d51ff179a086bfece14ed39e57f016e5af7e3575dc6341ec26d77c3cbb2edf86->leave($__internal_d51ff179a086bfece14ed39e57f016e5af7e3575dc6341ec26d77c3cbb2edf86_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a10c1e01fb49e0e4484ab22913a5cf49d6a40f7563a95fd65b872a28d2f4c737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10c1e01fb49e0e4484ab22913a5cf49d6a40f7563a95fd65b872a28d2f4c737->enter($__internal_a10c1e01fb49e0e4484ab22913a5cf49d6a40f7563a95fd65b872a28d2f4c737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a10c1e01fb49e0e4484ab22913a5cf49d6a40f7563a95fd65b872a28d2f4c737->leave($__internal_a10c1e01fb49e0e4484ab22913a5cf49d6a40f7563a95fd65b872a28d2f4c737_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_93a38c5b52887b501cd0b1eb2d1b1c127d1bc508c4f3cd4510fca85171fb4ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a38c5b52887b501cd0b1eb2d1b1c127d1bc508c4f3cd4510fca85171fb4ddf->enter($__internal_93a38c5b52887b501cd0b1eb2d1b1c127d1bc508c4f3cd4510fca85171fb4ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_93a38c5b52887b501cd0b1eb2d1b1c127d1bc508c4f3cd4510fca85171fb4ddf->leave($__internal_93a38c5b52887b501cd0b1eb2d1b1c127d1bc508c4f3cd4510fca85171fb4ddf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_852722b4a251cae082719c38361f1a602a9a6cd65aed9ff632f41bda5959fa6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852722b4a251cae082719c38361f1a602a9a6cd65aed9ff632f41bda5959fa6f->enter($__internal_852722b4a251cae082719c38361f1a602a9a6cd65aed9ff632f41bda5959fa6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_852722b4a251cae082719c38361f1a602a9a6cd65aed9ff632f41bda5959fa6f->leave($__internal_852722b4a251cae082719c38361f1a602a9a6cd65aed9ff632f41bda5959fa6f_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_5a0f7ef05606769e582eb349a0381f31a5d50b12f50c5f37d0579474ccb93f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0f7ef05606769e582eb349a0381f31a5d50b12f50c5f37d0579474ccb93f04->enter($__internal_5a0f7ef05606769e582eb349a0381f31a5d50b12f50c5f37d0579474ccb93f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5a0f7ef05606769e582eb349a0381f31a5d50b12f50c5f37d0579474ccb93f04->leave($__internal_5a0f7ef05606769e582eb349a0381f31a5d50b12f50c5f37d0579474ccb93f04_prof);

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

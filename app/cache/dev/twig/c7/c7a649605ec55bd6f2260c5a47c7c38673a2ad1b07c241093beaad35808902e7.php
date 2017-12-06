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
        $__internal_2de1ddfa613eef1e5097525177b823b2745bc85a1caf816cf528767ecefe04f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de1ddfa613eef1e5097525177b823b2745bc85a1caf816cf528767ecefe04f6->enter($__internal_2de1ddfa613eef1e5097525177b823b2745bc85a1caf816cf528767ecefe04f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2de1ddfa613eef1e5097525177b823b2745bc85a1caf816cf528767ecefe04f6->leave($__internal_2de1ddfa613eef1e5097525177b823b2745bc85a1caf816cf528767ecefe04f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8f48a57521df1dbd62fb9b9a100c085955ae3bab99221e4b99cf354632452cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f48a57521df1dbd62fb9b9a100c085955ae3bab99221e4b99cf354632452cc->enter($__internal_d8f48a57521df1dbd62fb9b9a100c085955ae3bab99221e4b99cf354632452cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d8f48a57521df1dbd62fb9b9a100c085955ae3bab99221e4b99cf354632452cc->leave($__internal_d8f48a57521df1dbd62fb9b9a100c085955ae3bab99221e4b99cf354632452cc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e66a53012fd02f5082a231ab237a1bd456d3173e4b66f35a3ba7202f0b6d22fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66a53012fd02f5082a231ab237a1bd456d3173e4b66f35a3ba7202f0b6d22fd->enter($__internal_e66a53012fd02f5082a231ab237a1bd456d3173e4b66f35a3ba7202f0b6d22fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_e66a53012fd02f5082a231ab237a1bd456d3173e4b66f35a3ba7202f0b6d22fd->leave($__internal_e66a53012fd02f5082a231ab237a1bd456d3173e4b66f35a3ba7202f0b6d22fd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba584aba5a13687a2aef31e9779497d3f495d28e42ffa84c1c055eaa4049fea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba584aba5a13687a2aef31e9779497d3f495d28e42ffa84c1c055eaa4049fea0->enter($__internal_ba584aba5a13687a2aef31e9779497d3f495d28e42ffa84c1c055eaa4049fea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ba584aba5a13687a2aef31e9779497d3f495d28e42ffa84c1c055eaa4049fea0->leave($__internal_ba584aba5a13687a2aef31e9779497d3f495d28e42ffa84c1c055eaa4049fea0_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_6abbc49cff1d44f452bd8327588149432082e3a14bc94bf8ffea0d336e9e0987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abbc49cff1d44f452bd8327588149432082e3a14bc94bf8ffea0d336e9e0987->enter($__internal_6abbc49cff1d44f452bd8327588149432082e3a14bc94bf8ffea0d336e9e0987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6abbc49cff1d44f452bd8327588149432082e3a14bc94bf8ffea0d336e9e0987->leave($__internal_6abbc49cff1d44f452bd8327588149432082e3a14bc94bf8ffea0d336e9e0987_prof);

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

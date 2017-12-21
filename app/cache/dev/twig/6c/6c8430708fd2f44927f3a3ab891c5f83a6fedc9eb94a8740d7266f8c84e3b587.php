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
        $__internal_85738b43b46241479b5285a3a28065c3f7a30cf2a38b4f85b6e38dd4253ffa63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85738b43b46241479b5285a3a28065c3f7a30cf2a38b4f85b6e38dd4253ffa63->enter($__internal_85738b43b46241479b5285a3a28065c3f7a30cf2a38b4f85b6e38dd4253ffa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85738b43b46241479b5285a3a28065c3f7a30cf2a38b4f85b6e38dd4253ffa63->leave($__internal_85738b43b46241479b5285a3a28065c3f7a30cf2a38b4f85b6e38dd4253ffa63_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ecb081d3934add5b13d7d25d4adb7d6735447f04d8a8c4218634273ea37ad229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb081d3934add5b13d7d25d4adb7d6735447f04d8a8c4218634273ea37ad229->enter($__internal_ecb081d3934add5b13d7d25d4adb7d6735447f04d8a8c4218634273ea37ad229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ecb081d3934add5b13d7d25d4adb7d6735447f04d8a8c4218634273ea37ad229->leave($__internal_ecb081d3934add5b13d7d25d4adb7d6735447f04d8a8c4218634273ea37ad229_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_faaec0fec7e9af615739753f8b391e7a5247c8568627f7d9b0b91d098c54735f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faaec0fec7e9af615739753f8b391e7a5247c8568627f7d9b0b91d098c54735f->enter($__internal_faaec0fec7e9af615739753f8b391e7a5247c8568627f7d9b0b91d098c54735f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_faaec0fec7e9af615739753f8b391e7a5247c8568627f7d9b0b91d098c54735f->leave($__internal_faaec0fec7e9af615739753f8b391e7a5247c8568627f7d9b0b91d098c54735f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6262474cb0f66a0d81de9009f8b64578979d05e6d0430623a19970083828c816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6262474cb0f66a0d81de9009f8b64578979d05e6d0430623a19970083828c816->enter($__internal_6262474cb0f66a0d81de9009f8b64578979d05e6d0430623a19970083828c816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6262474cb0f66a0d81de9009f8b64578979d05e6d0430623a19970083828c816->leave($__internal_6262474cb0f66a0d81de9009f8b64578979d05e6d0430623a19970083828c816_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_fc0672bc139852d8f364a5b4a40e04cc5569197429c7627a365b5a946dd036d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0672bc139852d8f364a5b4a40e04cc5569197429c7627a365b5a946dd036d6->enter($__internal_fc0672bc139852d8f364a5b4a40e04cc5569197429c7627a365b5a946dd036d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_fc0672bc139852d8f364a5b4a40e04cc5569197429c7627a365b5a946dd036d6->leave($__internal_fc0672bc139852d8f364a5b4a40e04cc5569197429c7627a365b5a946dd036d6_prof);

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

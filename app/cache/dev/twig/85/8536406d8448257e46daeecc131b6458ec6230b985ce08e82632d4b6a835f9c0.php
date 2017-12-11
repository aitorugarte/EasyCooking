<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_9c591f7752e12960e66c9d089d1fea62b11cd33c8cecf47955510b8299081b91 extends Twig_Template
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
        $__internal_a090fdb458a8f7000860cfd14f8982637dca206fea5a0ed6418411906003763d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a090fdb458a8f7000860cfd14f8982637dca206fea5a0ed6418411906003763d->enter($__internal_a090fdb458a8f7000860cfd14f8982637dca206fea5a0ed6418411906003763d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a090fdb458a8f7000860cfd14f8982637dca206fea5a0ed6418411906003763d->leave($__internal_a090fdb458a8f7000860cfd14f8982637dca206fea5a0ed6418411906003763d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0574930119f1397cedeeb5349813d661c2eeb9deb01e2e8c677a3dd0a5cb6ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0574930119f1397cedeeb5349813d661c2eeb9deb01e2e8c677a3dd0a5cb6ae6->enter($__internal_0574930119f1397cedeeb5349813d661c2eeb9deb01e2e8c677a3dd0a5cb6ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_0574930119f1397cedeeb5349813d661c2eeb9deb01e2e8c677a3dd0a5cb6ae6->leave($__internal_0574930119f1397cedeeb5349813d661c2eeb9deb01e2e8c677a3dd0a5cb6ae6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f99522864ef7e64731c76c5143cf1c172bf05faadf5b67fb86f74de48577a7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99522864ef7e64731c76c5143cf1c172bf05faadf5b67fb86f74de48577a7dd->enter($__internal_f99522864ef7e64731c76c5143cf1c172bf05faadf5b67fb86f74de48577a7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_f99522864ef7e64731c76c5143cf1c172bf05faadf5b67fb86f74de48577a7dd->leave($__internal_f99522864ef7e64731c76c5143cf1c172bf05faadf5b67fb86f74de48577a7dd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_db99b459f4df7797a30b56a7e0d85d22725b0f3e3a1df8358b0db27faf4fd1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db99b459f4df7797a30b56a7e0d85d22725b0f3e3a1df8358b0db27faf4fd1d9->enter($__internal_db99b459f4df7797a30b56a7e0d85d22725b0f3e3a1df8358b0db27faf4fd1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_db99b459f4df7797a30b56a7e0d85d22725b0f3e3a1df8358b0db27faf4fd1d9->leave($__internal_db99b459f4df7797a30b56a7e0d85d22725b0f3e3a1df8358b0db27faf4fd1d9_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_c8212032ec16da0b65773baffe3e3b48743ce942e4576f70d94cd6a3cdf8b53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8212032ec16da0b65773baffe3e3b48743ce942e4576f70d94cd6a3cdf8b53a->enter($__internal_c8212032ec16da0b65773baffe3e3b48743ce942e4576f70d94cd6a3cdf8b53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c8212032ec16da0b65773baffe3e3b48743ce942e4576f70d94cd6a3cdf8b53a->leave($__internal_c8212032ec16da0b65773baffe3e3b48743ce942e4576f70d94cd6a3cdf8b53a_prof);

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

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
        $__internal_ac0920f143d6dde22209268b5d5a570f4638112516b536280cb2ee2f3c0a9662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0920f143d6dde22209268b5d5a570f4638112516b536280cb2ee2f3c0a9662->enter($__internal_ac0920f143d6dde22209268b5d5a570f4638112516b536280cb2ee2f3c0a9662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac0920f143d6dde22209268b5d5a570f4638112516b536280cb2ee2f3c0a9662->leave($__internal_ac0920f143d6dde22209268b5d5a570f4638112516b536280cb2ee2f3c0a9662_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f46eb2a80461db699273a3e9dcf5dcf2c8b08576ef25b121854a794b1d1aa67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46eb2a80461db699273a3e9dcf5dcf2c8b08576ef25b121854a794b1d1aa67d->enter($__internal_f46eb2a80461db699273a3e9dcf5dcf2c8b08576ef25b121854a794b1d1aa67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f46eb2a80461db699273a3e9dcf5dcf2c8b08576ef25b121854a794b1d1aa67d->leave($__internal_f46eb2a80461db699273a3e9dcf5dcf2c8b08576ef25b121854a794b1d1aa67d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad6dd732f14e6fb4caf299d810fc5b0f0b2cca687684fb6d3c5ad2818b624763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6dd732f14e6fb4caf299d810fc5b0f0b2cca687684fb6d3c5ad2818b624763->enter($__internal_ad6dd732f14e6fb4caf299d810fc5b0f0b2cca687684fb6d3c5ad2818b624763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_ad6dd732f14e6fb4caf299d810fc5b0f0b2cca687684fb6d3c5ad2818b624763->leave($__internal_ad6dd732f14e6fb4caf299d810fc5b0f0b2cca687684fb6d3c5ad2818b624763_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_24f9fb80c5d373dc476d1d80e2c4e09726a5647c71d20788a69853306021141c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f9fb80c5d373dc476d1d80e2c4e09726a5647c71d20788a69853306021141c->enter($__internal_24f9fb80c5d373dc476d1d80e2c4e09726a5647c71d20788a69853306021141c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_24f9fb80c5d373dc476d1d80e2c4e09726a5647c71d20788a69853306021141c->leave($__internal_24f9fb80c5d373dc476d1d80e2c4e09726a5647c71d20788a69853306021141c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ff71d82491fdfcb133f70e872268f4a8895a66aea6c58c28b78ab89021cc2a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff71d82491fdfcb133f70e872268f4a8895a66aea6c58c28b78ab89021cc2a6e->enter($__internal_ff71d82491fdfcb133f70e872268f4a8895a66aea6c58c28b78ab89021cc2a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ff71d82491fdfcb133f70e872268f4a8895a66aea6c58c28b78ab89021cc2a6e->leave($__internal_ff71d82491fdfcb133f70e872268f4a8895a66aea6c58c28b78ab89021cc2a6e_prof);

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

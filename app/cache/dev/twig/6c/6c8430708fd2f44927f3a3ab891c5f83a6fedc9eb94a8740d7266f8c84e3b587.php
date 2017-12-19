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
        $__internal_fa406da7c3da2eb42af7c6ef312797b19404074215384bbb8ace74145f3a1fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa406da7c3da2eb42af7c6ef312797b19404074215384bbb8ace74145f3a1fcc->enter($__internal_fa406da7c3da2eb42af7c6ef312797b19404074215384bbb8ace74145f3a1fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa406da7c3da2eb42af7c6ef312797b19404074215384bbb8ace74145f3a1fcc->leave($__internal_fa406da7c3da2eb42af7c6ef312797b19404074215384bbb8ace74145f3a1fcc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d02687b86d1dfe1aa4597ca86693ba67bbf0f1e61dbda6f61c8a045f6f65c847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02687b86d1dfe1aa4597ca86693ba67bbf0f1e61dbda6f61c8a045f6f65c847->enter($__internal_d02687b86d1dfe1aa4597ca86693ba67bbf0f1e61dbda6f61c8a045f6f65c847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d02687b86d1dfe1aa4597ca86693ba67bbf0f1e61dbda6f61c8a045f6f65c847->leave($__internal_d02687b86d1dfe1aa4597ca86693ba67bbf0f1e61dbda6f61c8a045f6f65c847_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7be852292f13344b7f8120777a60fa835a0ab630dd4be5ec9c7b7dcf5cd6f166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be852292f13344b7f8120777a60fa835a0ab630dd4be5ec9c7b7dcf5cd6f166->enter($__internal_7be852292f13344b7f8120777a60fa835a0ab630dd4be5ec9c7b7dcf5cd6f166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_7be852292f13344b7f8120777a60fa835a0ab630dd4be5ec9c7b7dcf5cd6f166->leave($__internal_7be852292f13344b7f8120777a60fa835a0ab630dd4be5ec9c7b7dcf5cd6f166_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9964faa84ee32dac99493568635bcecae249592a1fe8ed297965141f6ebd80d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9964faa84ee32dac99493568635bcecae249592a1fe8ed297965141f6ebd80d->enter($__internal_c9964faa84ee32dac99493568635bcecae249592a1fe8ed297965141f6ebd80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c9964faa84ee32dac99493568635bcecae249592a1fe8ed297965141f6ebd80d->leave($__internal_c9964faa84ee32dac99493568635bcecae249592a1fe8ed297965141f6ebd80d_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_3eb634e016206c0a0b023e48543651286bd995dda516e38d35a4c42a504dc891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb634e016206c0a0b023e48543651286bd995dda516e38d35a4c42a504dc891->enter($__internal_3eb634e016206c0a0b023e48543651286bd995dda516e38d35a4c42a504dc891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_3eb634e016206c0a0b023e48543651286bd995dda516e38d35a4c42a504dc891->leave($__internal_3eb634e016206c0a0b023e48543651286bd995dda516e38d35a4c42a504dc891_prof);

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

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
        $__internal_e3579dee4ecbc2610daefe0639641171557bf89244bfa05d30a9dbbfbbe51cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3579dee4ecbc2610daefe0639641171557bf89244bfa05d30a9dbbfbbe51cbe->enter($__internal_e3579dee4ecbc2610daefe0639641171557bf89244bfa05d30a9dbbfbbe51cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3579dee4ecbc2610daefe0639641171557bf89244bfa05d30a9dbbfbbe51cbe->leave($__internal_e3579dee4ecbc2610daefe0639641171557bf89244bfa05d30a9dbbfbbe51cbe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca5be32cf98fcfe0238d35156dc377821d7a48f44b0a0bb1886b249a6709288d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5be32cf98fcfe0238d35156dc377821d7a48f44b0a0bb1886b249a6709288d->enter($__internal_ca5be32cf98fcfe0238d35156dc377821d7a48f44b0a0bb1886b249a6709288d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ca5be32cf98fcfe0238d35156dc377821d7a48f44b0a0bb1886b249a6709288d->leave($__internal_ca5be32cf98fcfe0238d35156dc377821d7a48f44b0a0bb1886b249a6709288d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd3f9678a642f3db28844ce6bcc0d813baff7034253266d8316c0a1809f27857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd3f9678a642f3db28844ce6bcc0d813baff7034253266d8316c0a1809f27857->enter($__internal_dd3f9678a642f3db28844ce6bcc0d813baff7034253266d8316c0a1809f27857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_dd3f9678a642f3db28844ce6bcc0d813baff7034253266d8316c0a1809f27857->leave($__internal_dd3f9678a642f3db28844ce6bcc0d813baff7034253266d8316c0a1809f27857_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_628081fb13c3b1e08ddf00177064a5b1d1442e2e5c129bbdb5b8ddd124194ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628081fb13c3b1e08ddf00177064a5b1d1442e2e5c129bbdb5b8ddd124194ca1->enter($__internal_628081fb13c3b1e08ddf00177064a5b1d1442e2e5c129bbdb5b8ddd124194ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_628081fb13c3b1e08ddf00177064a5b1d1442e2e5c129bbdb5b8ddd124194ca1->leave($__internal_628081fb13c3b1e08ddf00177064a5b1d1442e2e5c129bbdb5b8ddd124194ca1_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd4c7562eed31c8b0e0802488c52ec9babe99e46dc24c142218932deb49da623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4c7562eed31c8b0e0802488c52ec9babe99e46dc24c142218932deb49da623->enter($__internal_bd4c7562eed31c8b0e0802488c52ec9babe99e46dc24c142218932deb49da623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_bd4c7562eed31c8b0e0802488c52ec9babe99e46dc24c142218932deb49da623->leave($__internal_bd4c7562eed31c8b0e0802488c52ec9babe99e46dc24c142218932deb49da623_prof);

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

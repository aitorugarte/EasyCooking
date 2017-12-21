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
        $__internal_a140395813c792e2d7f88a2fddbd3e1ec83a6a9b3a2e4c8c04ecd2955ff2499f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a140395813c792e2d7f88a2fddbd3e1ec83a6a9b3a2e4c8c04ecd2955ff2499f->enter($__internal_a140395813c792e2d7f88a2fddbd3e1ec83a6a9b3a2e4c8c04ecd2955ff2499f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a140395813c792e2d7f88a2fddbd3e1ec83a6a9b3a2e4c8c04ecd2955ff2499f->leave($__internal_a140395813c792e2d7f88a2fddbd3e1ec83a6a9b3a2e4c8c04ecd2955ff2499f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c668904daebc1f5780478367b1e305107bc2a81d59178f74c59fe9a76fa50a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c668904daebc1f5780478367b1e305107bc2a81d59178f74c59fe9a76fa50a21->enter($__internal_c668904daebc1f5780478367b1e305107bc2a81d59178f74c59fe9a76fa50a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c668904daebc1f5780478367b1e305107bc2a81d59178f74c59fe9a76fa50a21->leave($__internal_c668904daebc1f5780478367b1e305107bc2a81d59178f74c59fe9a76fa50a21_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6475ede94a76a5e1fea73d5c516ef5052b5a64602045e42a8835e616bac3d474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6475ede94a76a5e1fea73d5c516ef5052b5a64602045e42a8835e616bac3d474->enter($__internal_6475ede94a76a5e1fea73d5c516ef5052b5a64602045e42a8835e616bac3d474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_6475ede94a76a5e1fea73d5c516ef5052b5a64602045e42a8835e616bac3d474->leave($__internal_6475ede94a76a5e1fea73d5c516ef5052b5a64602045e42a8835e616bac3d474_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6bfb0b22ebb5529d7f9268e72be959e5cc5451a6e68dbab3a17b5f1d3be39df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6bfb0b22ebb5529d7f9268e72be959e5cc5451a6e68dbab3a17b5f1d3be39df->enter($__internal_d6bfb0b22ebb5529d7f9268e72be959e5cc5451a6e68dbab3a17b5f1d3be39df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d6bfb0b22ebb5529d7f9268e72be959e5cc5451a6e68dbab3a17b5f1d3be39df->leave($__internal_d6bfb0b22ebb5529d7f9268e72be959e5cc5451a6e68dbab3a17b5f1d3be39df_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ed282c55ff2ad4a89220d343b9884af4ea7dbff49cbca042d737c62329d50319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed282c55ff2ad4a89220d343b9884af4ea7dbff49cbca042d737c62329d50319->enter($__internal_ed282c55ff2ad4a89220d343b9884af4ea7dbff49cbca042d737c62329d50319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ed282c55ff2ad4a89220d343b9884af4ea7dbff49cbca042d737c62329d50319->leave($__internal_ed282c55ff2ad4a89220d343b9884af4ea7dbff49cbca042d737c62329d50319_prof);

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

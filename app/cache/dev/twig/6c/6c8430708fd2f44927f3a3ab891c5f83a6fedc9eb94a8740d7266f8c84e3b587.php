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
        $__internal_b18f7f09b2b8d4394db2a0660d87f85c5d35e7255d9bca263ee90cf245781c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18f7f09b2b8d4394db2a0660d87f85c5d35e7255d9bca263ee90cf245781c7a->enter($__internal_b18f7f09b2b8d4394db2a0660d87f85c5d35e7255d9bca263ee90cf245781c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b18f7f09b2b8d4394db2a0660d87f85c5d35e7255d9bca263ee90cf245781c7a->leave($__internal_b18f7f09b2b8d4394db2a0660d87f85c5d35e7255d9bca263ee90cf245781c7a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6389b21c6e860771cc498f72f72ae8d7057fbb5c517f12f0eb8b572cd8aac07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6389b21c6e860771cc498f72f72ae8d7057fbb5c517f12f0eb8b572cd8aac07->enter($__internal_f6389b21c6e860771cc498f72f72ae8d7057fbb5c517f12f0eb8b572cd8aac07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f6389b21c6e860771cc498f72f72ae8d7057fbb5c517f12f0eb8b572cd8aac07->leave($__internal_f6389b21c6e860771cc498f72f72ae8d7057fbb5c517f12f0eb8b572cd8aac07_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6b9374088799aecc8be0bce484afa9b404ce0e9495e46958c5e5b5892d538a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b9374088799aecc8be0bce484afa9b404ce0e9495e46958c5e5b5892d538a4->enter($__internal_f6b9374088799aecc8be0bce484afa9b404ce0e9495e46958c5e5b5892d538a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_f6b9374088799aecc8be0bce484afa9b404ce0e9495e46958c5e5b5892d538a4->leave($__internal_f6b9374088799aecc8be0bce484afa9b404ce0e9495e46958c5e5b5892d538a4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa16dd6a7bbf801eff54daca2a89d0043dd0d6d7d30fdedb6b020ea09950069b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa16dd6a7bbf801eff54daca2a89d0043dd0d6d7d30fdedb6b020ea09950069b->enter($__internal_aa16dd6a7bbf801eff54daca2a89d0043dd0d6d7d30fdedb6b020ea09950069b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aa16dd6a7bbf801eff54daca2a89d0043dd0d6d7d30fdedb6b020ea09950069b->leave($__internal_aa16dd6a7bbf801eff54daca2a89d0043dd0d6d7d30fdedb6b020ea09950069b_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_022254140044efdbd9f4281ccddba62c60ac3d2fc689de6934b6c9e55de530be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022254140044efdbd9f4281ccddba62c60ac3d2fc689de6934b6c9e55de530be->enter($__internal_022254140044efdbd9f4281ccddba62c60ac3d2fc689de6934b6c9e55de530be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_022254140044efdbd9f4281ccddba62c60ac3d2fc689de6934b6c9e55de530be->leave($__internal_022254140044efdbd9f4281ccddba62c60ac3d2fc689de6934b6c9e55de530be_prof);

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

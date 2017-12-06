<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_6eb0441d2f8f3a515c5fb04276bb1016e18c84f2d1b3a5c6657f707419a34563 extends Twig_Template
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
        $__internal_18c1a04b6a2db3c263ed6a072c5710a269e7eb33b14d8e1ad9ef43e868f2b811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c1a04b6a2db3c263ed6a072c5710a269e7eb33b14d8e1ad9ef43e868f2b811->enter($__internal_18c1a04b6a2db3c263ed6a072c5710a269e7eb33b14d8e1ad9ef43e868f2b811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18c1a04b6a2db3c263ed6a072c5710a269e7eb33b14d8e1ad9ef43e868f2b811->leave($__internal_18c1a04b6a2db3c263ed6a072c5710a269e7eb33b14d8e1ad9ef43e868f2b811_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5cffc9be97f882c42943e7208ab1eec04a8c7de2d12f7aeccc06637db1a6225b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cffc9be97f882c42943e7208ab1eec04a8c7de2d12f7aeccc06637db1a6225b->enter($__internal_5cffc9be97f882c42943e7208ab1eec04a8c7de2d12f7aeccc06637db1a6225b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_5cffc9be97f882c42943e7208ab1eec04a8c7de2d12f7aeccc06637db1a6225b->leave($__internal_5cffc9be97f882c42943e7208ab1eec04a8c7de2d12f7aeccc06637db1a6225b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_87132fe214044cbbcada5b47a413868185c9393bf3aa423d3fcea640c39d2864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87132fe214044cbbcada5b47a413868185c9393bf3aa423d3fcea640c39d2864->enter($__internal_87132fe214044cbbcada5b47a413868185c9393bf3aa423d3fcea640c39d2864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_87132fe214044cbbcada5b47a413868185c9393bf3aa423d3fcea640c39d2864->leave($__internal_87132fe214044cbbcada5b47a413868185c9393bf3aa423d3fcea640c39d2864_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cd0d5178fe04f95335b6129246d05db29d00baa6eb276f3e617cd99fc50b262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd0d5178fe04f95335b6129246d05db29d00baa6eb276f3e617cd99fc50b262->enter($__internal_0cd0d5178fe04f95335b6129246d05db29d00baa6eb276f3e617cd99fc50b262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0cd0d5178fe04f95335b6129246d05db29d00baa6eb276f3e617cd99fc50b262->leave($__internal_0cd0d5178fe04f95335b6129246d05db29d00baa6eb276f3e617cd99fc50b262_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_8528b9b51fec59868a7c9b3b035d5c6348b007866086e03cc3f3a5eedb3fb031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8528b9b51fec59868a7c9b3b035d5c6348b007866086e03cc3f3a5eedb3fb031->enter($__internal_8528b9b51fec59868a7c9b3b035d5c6348b007866086e03cc3f3a5eedb3fb031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8528b9b51fec59868a7c9b3b035d5c6348b007866086e03cc3f3a5eedb3fb031->leave($__internal_8528b9b51fec59868a7c9b3b035d5c6348b007866086e03cc3f3a5eedb3fb031_prof);

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

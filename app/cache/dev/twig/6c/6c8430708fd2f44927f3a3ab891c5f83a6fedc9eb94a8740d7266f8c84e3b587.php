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
        $__internal_6a4ea719194506d92d8ab5ffa7a76b506989d4d344b7cf655973fa60d7d4303f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4ea719194506d92d8ab5ffa7a76b506989d4d344b7cf655973fa60d7d4303f->enter($__internal_6a4ea719194506d92d8ab5ffa7a76b506989d4d344b7cf655973fa60d7d4303f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a4ea719194506d92d8ab5ffa7a76b506989d4d344b7cf655973fa60d7d4303f->leave($__internal_6a4ea719194506d92d8ab5ffa7a76b506989d4d344b7cf655973fa60d7d4303f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b154230161d8b42c07f81b54e754aa39360db19595476e69b7f9b20c22887957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b154230161d8b42c07f81b54e754aa39360db19595476e69b7f9b20c22887957->enter($__internal_b154230161d8b42c07f81b54e754aa39360db19595476e69b7f9b20c22887957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b154230161d8b42c07f81b54e754aa39360db19595476e69b7f9b20c22887957->leave($__internal_b154230161d8b42c07f81b54e754aa39360db19595476e69b7f9b20c22887957_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78b36180ac26f0a6df91164b64422bdb1f15d3eed03872ca2ade065f669395c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b36180ac26f0a6df91164b64422bdb1f15d3eed03872ca2ade065f669395c0->enter($__internal_78b36180ac26f0a6df91164b64422bdb1f15d3eed03872ca2ade065f669395c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_78b36180ac26f0a6df91164b64422bdb1f15d3eed03872ca2ade065f669395c0->leave($__internal_78b36180ac26f0a6df91164b64422bdb1f15d3eed03872ca2ade065f669395c0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b799b22d0fafb6d9d3634673be4b7b05919239c2fb4ea06674f03fc73e6bce5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b799b22d0fafb6d9d3634673be4b7b05919239c2fb4ea06674f03fc73e6bce5f->enter($__internal_b799b22d0fafb6d9d3634673be4b7b05919239c2fb4ea06674f03fc73e6bce5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b799b22d0fafb6d9d3634673be4b7b05919239c2fb4ea06674f03fc73e6bce5f->leave($__internal_b799b22d0fafb6d9d3634673be4b7b05919239c2fb4ea06674f03fc73e6bce5f_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_8f19d72a9d231560ac0c9a75db0089cccbe5c3155d7970f230f90e732c68b520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f19d72a9d231560ac0c9a75db0089cccbe5c3155d7970f230f90e732c68b520->enter($__internal_8f19d72a9d231560ac0c9a75db0089cccbe5c3155d7970f230f90e732c68b520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8f19d72a9d231560ac0c9a75db0089cccbe5c3155d7970f230f90e732c68b520->leave($__internal_8f19d72a9d231560ac0c9a75db0089cccbe5c3155d7970f230f90e732c68b520_prof);

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

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
        $__internal_91b78777bc02df60025ad0bc62e8352b08b83a8d05a231b17bef5f6004c9efeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b78777bc02df60025ad0bc62e8352b08b83a8d05a231b17bef5f6004c9efeb->enter($__internal_91b78777bc02df60025ad0bc62e8352b08b83a8d05a231b17bef5f6004c9efeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91b78777bc02df60025ad0bc62e8352b08b83a8d05a231b17bef5f6004c9efeb->leave($__internal_91b78777bc02df60025ad0bc62e8352b08b83a8d05a231b17bef5f6004c9efeb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_681a344c57d570d422b3e871f290cd3a8cefc8a2f7e521a59907afa33f05322a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681a344c57d570d422b3e871f290cd3a8cefc8a2f7e521a59907afa33f05322a->enter($__internal_681a344c57d570d422b3e871f290cd3a8cefc8a2f7e521a59907afa33f05322a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_681a344c57d570d422b3e871f290cd3a8cefc8a2f7e521a59907afa33f05322a->leave($__internal_681a344c57d570d422b3e871f290cd3a8cefc8a2f7e521a59907afa33f05322a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_be3ace1ffaf882f9d4d725e57fc328f9fde744fb28b48475a88214bf46eb566f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3ace1ffaf882f9d4d725e57fc328f9fde744fb28b48475a88214bf46eb566f->enter($__internal_be3ace1ffaf882f9d4d725e57fc328f9fde744fb28b48475a88214bf46eb566f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_be3ace1ffaf882f9d4d725e57fc328f9fde744fb28b48475a88214bf46eb566f->leave($__internal_be3ace1ffaf882f9d4d725e57fc328f9fde744fb28b48475a88214bf46eb566f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_69aba7501adae788ed5d3da93812e4680ecec9f65f6d18ae6a4ad38c8204549e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69aba7501adae788ed5d3da93812e4680ecec9f65f6d18ae6a4ad38c8204549e->enter($__internal_69aba7501adae788ed5d3da93812e4680ecec9f65f6d18ae6a4ad38c8204549e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_69aba7501adae788ed5d3da93812e4680ecec9f65f6d18ae6a4ad38c8204549e->leave($__internal_69aba7501adae788ed5d3da93812e4680ecec9f65f6d18ae6a4ad38c8204549e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_5f4370b0409594f51101b0ec06ca0f16c978682c2aeb0c54d3b35de9d0dda844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4370b0409594f51101b0ec06ca0f16c978682c2aeb0c54d3b35de9d0dda844->enter($__internal_5f4370b0409594f51101b0ec06ca0f16c978682c2aeb0c54d3b35de9d0dda844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5f4370b0409594f51101b0ec06ca0f16c978682c2aeb0c54d3b35de9d0dda844->leave($__internal_5f4370b0409594f51101b0ec06ca0f16c978682c2aeb0c54d3b35de9d0dda844_prof);

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

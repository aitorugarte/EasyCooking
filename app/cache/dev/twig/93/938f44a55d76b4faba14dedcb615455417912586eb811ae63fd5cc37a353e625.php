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
        $__internal_31085b0a826f6b825eeb545ff1390ca1730cd71210f160a16a566cba4a27bd27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31085b0a826f6b825eeb545ff1390ca1730cd71210f160a16a566cba4a27bd27->enter($__internal_31085b0a826f6b825eeb545ff1390ca1730cd71210f160a16a566cba4a27bd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31085b0a826f6b825eeb545ff1390ca1730cd71210f160a16a566cba4a27bd27->leave($__internal_31085b0a826f6b825eeb545ff1390ca1730cd71210f160a16a566cba4a27bd27_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48ac090fbf65ae457c47a353e0f0a8933cb093d3ce26ee8c6f2ffa5a77ae9d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ac090fbf65ae457c47a353e0f0a8933cb093d3ce26ee8c6f2ffa5a77ae9d11->enter($__internal_48ac090fbf65ae457c47a353e0f0a8933cb093d3ce26ee8c6f2ffa5a77ae9d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_48ac090fbf65ae457c47a353e0f0a8933cb093d3ce26ee8c6f2ffa5a77ae9d11->leave($__internal_48ac090fbf65ae457c47a353e0f0a8933cb093d3ce26ee8c6f2ffa5a77ae9d11_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee783fbde10762043a07908c46825c788dd9e5314f81ad1545db461cde493061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee783fbde10762043a07908c46825c788dd9e5314f81ad1545db461cde493061->enter($__internal_ee783fbde10762043a07908c46825c788dd9e5314f81ad1545db461cde493061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_ee783fbde10762043a07908c46825c788dd9e5314f81ad1545db461cde493061->leave($__internal_ee783fbde10762043a07908c46825c788dd9e5314f81ad1545db461cde493061_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c444fb526cb635919c52f365714e8cfcfad7d6513fa0175496526e5e3eac1ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c444fb526cb635919c52f365714e8cfcfad7d6513fa0175496526e5e3eac1ce0->enter($__internal_c444fb526cb635919c52f365714e8cfcfad7d6513fa0175496526e5e3eac1ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c444fb526cb635919c52f365714e8cfcfad7d6513fa0175496526e5e3eac1ce0->leave($__internal_c444fb526cb635919c52f365714e8cfcfad7d6513fa0175496526e5e3eac1ce0_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_f34eb6de0a3352c4732d4329c19a9cc22d76db8bf6290c76931d7dc96c6836db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34eb6de0a3352c4732d4329c19a9cc22d76db8bf6290c76931d7dc96c6836db->enter($__internal_f34eb6de0a3352c4732d4329c19a9cc22d76db8bf6290c76931d7dc96c6836db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f34eb6de0a3352c4732d4329c19a9cc22d76db8bf6290c76931d7dc96c6836db->leave($__internal_f34eb6de0a3352c4732d4329c19a9cc22d76db8bf6290c76931d7dc96c6836db_prof);

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

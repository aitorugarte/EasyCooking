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
        $__internal_632b6cdb173f7571479a880359c613c41e11be4895b995c84003d6cba74befc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632b6cdb173f7571479a880359c613c41e11be4895b995c84003d6cba74befc8->enter($__internal_632b6cdb173f7571479a880359c613c41e11be4895b995c84003d6cba74befc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_632b6cdb173f7571479a880359c613c41e11be4895b995c84003d6cba74befc8->leave($__internal_632b6cdb173f7571479a880359c613c41e11be4895b995c84003d6cba74befc8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c18c66c8d6da7be16401af3f2a7fe1ccdce865dcd4a836aad0dea83b7778e131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c18c66c8d6da7be16401af3f2a7fe1ccdce865dcd4a836aad0dea83b7778e131->enter($__internal_c18c66c8d6da7be16401af3f2a7fe1ccdce865dcd4a836aad0dea83b7778e131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c18c66c8d6da7be16401af3f2a7fe1ccdce865dcd4a836aad0dea83b7778e131->leave($__internal_c18c66c8d6da7be16401af3f2a7fe1ccdce865dcd4a836aad0dea83b7778e131_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_be61f89c46208132beb7b334908dfb82f82c9c480941e354eabac98609ebbf3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be61f89c46208132beb7b334908dfb82f82c9c480941e354eabac98609ebbf3d->enter($__internal_be61f89c46208132beb7b334908dfb82f82c9c480941e354eabac98609ebbf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_be61f89c46208132beb7b334908dfb82f82c9c480941e354eabac98609ebbf3d->leave($__internal_be61f89c46208132beb7b334908dfb82f82c9c480941e354eabac98609ebbf3d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7880e00d73328d9617d20c0bd59cdbeda45190caa4606db2d8143b83c57d87ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7880e00d73328d9617d20c0bd59cdbeda45190caa4606db2d8143b83c57d87ec->enter($__internal_7880e00d73328d9617d20c0bd59cdbeda45190caa4606db2d8143b83c57d87ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7880e00d73328d9617d20c0bd59cdbeda45190caa4606db2d8143b83c57d87ec->leave($__internal_7880e00d73328d9617d20c0bd59cdbeda45190caa4606db2d8143b83c57d87ec_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d12b5e3e715a468719fe3109fd08e5f00fd72f8905b45aa51ed79afc5c8e5e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12b5e3e715a468719fe3109fd08e5f00fd72f8905b45aa51ed79afc5c8e5e71->enter($__internal_d12b5e3e715a468719fe3109fd08e5f00fd72f8905b45aa51ed79afc5c8e5e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d12b5e3e715a468719fe3109fd08e5f00fd72f8905b45aa51ed79afc5c8e5e71->leave($__internal_d12b5e3e715a468719fe3109fd08e5f00fd72f8905b45aa51ed79afc5c8e5e71_prof);

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

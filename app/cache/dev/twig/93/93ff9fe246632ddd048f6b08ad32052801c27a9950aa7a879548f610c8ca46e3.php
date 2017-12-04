<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f21b7ea291728572a5ab8c5ababa409bb1297cef76ce9151aec1e763ae7d361b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7314995662c5fb5b8a35ae55b71f8aa421ee6a6a631c264d663c4686ea237a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7314995662c5fb5b8a35ae55b71f8aa421ee6a6a631c264d663c4686ea237a84->enter($__internal_7314995662c5fb5b8a35ae55b71f8aa421ee6a6a631c264d663c4686ea237a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7314995662c5fb5b8a35ae55b71f8aa421ee6a6a631c264d663c4686ea237a84->leave($__internal_7314995662c5fb5b8a35ae55b71f8aa421ee6a6a631c264d663c4686ea237a84_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d70589e7e173062bc71f345be7cf20656855ec88881dc0b84e86a50824540fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70589e7e173062bc71f345be7cf20656855ec88881dc0b84e86a50824540fd3->enter($__internal_d70589e7e173062bc71f345be7cf20656855ec88881dc0b84e86a50824540fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d70589e7e173062bc71f345be7cf20656855ec88881dc0b84e86a50824540fd3->leave($__internal_d70589e7e173062bc71f345be7cf20656855ec88881dc0b84e86a50824540fd3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_24cdec4f6a4e10fe355f82afd96830b56c411055e10135a983ea60d5995bc419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24cdec4f6a4e10fe355f82afd96830b56c411055e10135a983ea60d5995bc419->enter($__internal_24cdec4f6a4e10fe355f82afd96830b56c411055e10135a983ea60d5995bc419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_24cdec4f6a4e10fe355f82afd96830b56c411055e10135a983ea60d5995bc419->leave($__internal_24cdec4f6a4e10fe355f82afd96830b56c411055e10135a983ea60d5995bc419_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_19ca9464c927700c0925f71a08d2ae43bb350abf68945b9f93732e3eeacf5f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ca9464c927700c0925f71a08d2ae43bb350abf68945b9f93732e3eeacf5f2d->enter($__internal_19ca9464c927700c0925f71a08d2ae43bb350abf68945b9f93732e3eeacf5f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_19ca9464c927700c0925f71a08d2ae43bb350abf68945b9f93732e3eeacf5f2d->leave($__internal_19ca9464c927700c0925f71a08d2ae43bb350abf68945b9f93732e3eeacf5f2d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

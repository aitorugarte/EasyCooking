<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d058a5f626ae98d4eef3f0222602b751b9c1afe925737d35d96132b63f8317cd extends Twig_Template
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
        $__internal_0e73436193a211657728726dae7f4e14221ea7c716432835bd538cc3ae754482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e73436193a211657728726dae7f4e14221ea7c716432835bd538cc3ae754482->enter($__internal_0e73436193a211657728726dae7f4e14221ea7c716432835bd538cc3ae754482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e73436193a211657728726dae7f4e14221ea7c716432835bd538cc3ae754482->leave($__internal_0e73436193a211657728726dae7f4e14221ea7c716432835bd538cc3ae754482_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c6ef63a796010af66cad62244573508747a87569bf350d02a04ca5f2793b630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6ef63a796010af66cad62244573508747a87569bf350d02a04ca5f2793b630->enter($__internal_3c6ef63a796010af66cad62244573508747a87569bf350d02a04ca5f2793b630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3c6ef63a796010af66cad62244573508747a87569bf350d02a04ca5f2793b630->leave($__internal_3c6ef63a796010af66cad62244573508747a87569bf350d02a04ca5f2793b630_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_957e4e776377066af409cc7f76abc122f310eea8157175d7a4cda17b4c6c6f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957e4e776377066af409cc7f76abc122f310eea8157175d7a4cda17b4c6c6f42->enter($__internal_957e4e776377066af409cc7f76abc122f310eea8157175d7a4cda17b4c6c6f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_957e4e776377066af409cc7f76abc122f310eea8157175d7a4cda17b4c6c6f42->leave($__internal_957e4e776377066af409cc7f76abc122f310eea8157175d7a4cda17b4c6c6f42_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6550998c311965f2b34c21c110cd91b51eccbe0aa9b15c0ea376dc72e6b4371d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6550998c311965f2b34c21c110cd91b51eccbe0aa9b15c0ea376dc72e6b4371d->enter($__internal_6550998c311965f2b34c21c110cd91b51eccbe0aa9b15c0ea376dc72e6b4371d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6550998c311965f2b34c21c110cd91b51eccbe0aa9b15c0ea376dc72e6b4371d->leave($__internal_6550998c311965f2b34c21c110cd91b51eccbe0aa9b15c0ea376dc72e6b4371d_prof);

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

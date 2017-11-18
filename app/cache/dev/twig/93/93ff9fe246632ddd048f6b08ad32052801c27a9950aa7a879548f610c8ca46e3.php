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
        $__internal_e54fa5c33cb8a45db761037bd5844a9c4954d43c36e46e30c94cd9d2b34423e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54fa5c33cb8a45db761037bd5844a9c4954d43c36e46e30c94cd9d2b34423e2->enter($__internal_e54fa5c33cb8a45db761037bd5844a9c4954d43c36e46e30c94cd9d2b34423e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e54fa5c33cb8a45db761037bd5844a9c4954d43c36e46e30c94cd9d2b34423e2->leave($__internal_e54fa5c33cb8a45db761037bd5844a9c4954d43c36e46e30c94cd9d2b34423e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1c64d0bc4f1b5be6c732e7d3b3c9e0596497ca70c47a393da37c4eabf1e9710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c64d0bc4f1b5be6c732e7d3b3c9e0596497ca70c47a393da37c4eabf1e9710->enter($__internal_d1c64d0bc4f1b5be6c732e7d3b3c9e0596497ca70c47a393da37c4eabf1e9710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d1c64d0bc4f1b5be6c732e7d3b3c9e0596497ca70c47a393da37c4eabf1e9710->leave($__internal_d1c64d0bc4f1b5be6c732e7d3b3c9e0596497ca70c47a393da37c4eabf1e9710_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_74c6bf6e9d9d3e90e8589b11a4dfb8c7a4aa62fe25f5b2e232f972bffe95d056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c6bf6e9d9d3e90e8589b11a4dfb8c7a4aa62fe25f5b2e232f972bffe95d056->enter($__internal_74c6bf6e9d9d3e90e8589b11a4dfb8c7a4aa62fe25f5b2e232f972bffe95d056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_74c6bf6e9d9d3e90e8589b11a4dfb8c7a4aa62fe25f5b2e232f972bffe95d056->leave($__internal_74c6bf6e9d9d3e90e8589b11a4dfb8c7a4aa62fe25f5b2e232f972bffe95d056_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdfc11f1b191fbe4d7527423f27ac72884f0d5eca20c1638d7d34df11a5ec06f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdfc11f1b191fbe4d7527423f27ac72884f0d5eca20c1638d7d34df11a5ec06f->enter($__internal_bdfc11f1b191fbe4d7527423f27ac72884f0d5eca20c1638d7d34df11a5ec06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bdfc11f1b191fbe4d7527423f27ac72884f0d5eca20c1638d7d34df11a5ec06f->leave($__internal_bdfc11f1b191fbe4d7527423f27ac72884f0d5eca20c1638d7d34df11a5ec06f_prof);

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

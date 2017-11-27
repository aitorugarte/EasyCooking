<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d7660727b9ca449ba4fc4eeda6c605d9884ead04c0b78fcd7c9d55644fa1a747 extends Twig_Template
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
        $__internal_f39c11eab7b635787a414b8bc458b4345f50c52040788329224dea96353f94a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39c11eab7b635787a414b8bc458b4345f50c52040788329224dea96353f94a4->enter($__internal_f39c11eab7b635787a414b8bc458b4345f50c52040788329224dea96353f94a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f39c11eab7b635787a414b8bc458b4345f50c52040788329224dea96353f94a4->leave($__internal_f39c11eab7b635787a414b8bc458b4345f50c52040788329224dea96353f94a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ed8448762ded0413b5a8c9db3abd1a10cb636b43966c3b86e486048dc415ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed8448762ded0413b5a8c9db3abd1a10cb636b43966c3b86e486048dc415ae7->enter($__internal_2ed8448762ded0413b5a8c9db3abd1a10cb636b43966c3b86e486048dc415ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2ed8448762ded0413b5a8c9db3abd1a10cb636b43966c3b86e486048dc415ae7->leave($__internal_2ed8448762ded0413b5a8c9db3abd1a10cb636b43966c3b86e486048dc415ae7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_757cca31d334a2796c3b817e60632833ec92c7e33d70c2934eeed8080c62f0c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757cca31d334a2796c3b817e60632833ec92c7e33d70c2934eeed8080c62f0c7->enter($__internal_757cca31d334a2796c3b817e60632833ec92c7e33d70c2934eeed8080c62f0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_757cca31d334a2796c3b817e60632833ec92c7e33d70c2934eeed8080c62f0c7->leave($__internal_757cca31d334a2796c3b817e60632833ec92c7e33d70c2934eeed8080c62f0c7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4982c4451476c7522fe43a62dc2150efa0733223db4935961c8783686eec4fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4982c4451476c7522fe43a62dc2150efa0733223db4935961c8783686eec4fb1->enter($__internal_4982c4451476c7522fe43a62dc2150efa0733223db4935961c8783686eec4fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4982c4451476c7522fe43a62dc2150efa0733223db4935961c8783686eec4fb1->leave($__internal_4982c4451476c7522fe43a62dc2150efa0733223db4935961c8783686eec4fb1_prof);

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

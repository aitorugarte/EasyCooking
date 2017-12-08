<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_18d6667e8874c348cd76f6c7d9f2ff0b4daf99d663d4ba13edf04ba359c575bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_61137f67b3dbeb1271e0ccad16496cee2bdcfc4901b1e3797841192eccb68353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61137f67b3dbeb1271e0ccad16496cee2bdcfc4901b1e3797841192eccb68353->enter($__internal_61137f67b3dbeb1271e0ccad16496cee2bdcfc4901b1e3797841192eccb68353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61137f67b3dbeb1271e0ccad16496cee2bdcfc4901b1e3797841192eccb68353->leave($__internal_61137f67b3dbeb1271e0ccad16496cee2bdcfc4901b1e3797841192eccb68353_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f25d26015ac9135a6a43351a81d123e5112b795362db9defd16bf8a09f25d204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25d26015ac9135a6a43351a81d123e5112b795362db9defd16bf8a09f25d204->enter($__internal_f25d26015ac9135a6a43351a81d123e5112b795362db9defd16bf8a09f25d204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f25d26015ac9135a6a43351a81d123e5112b795362db9defd16bf8a09f25d204->leave($__internal_f25d26015ac9135a6a43351a81d123e5112b795362db9defd16bf8a09f25d204_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_04f160643c73155c6e97d021c60b9c666650191776c6cf46fc5443f72caa8cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f160643c73155c6e97d021c60b9c666650191776c6cf46fc5443f72caa8cf9->enter($__internal_04f160643c73155c6e97d021c60b9c666650191776c6cf46fc5443f72caa8cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_04f160643c73155c6e97d021c60b9c666650191776c6cf46fc5443f72caa8cf9->leave($__internal_04f160643c73155c6e97d021c60b9c666650191776c6cf46fc5443f72caa8cf9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5bd260948a7ca5a455fda542ff454f2e7cdec4781a23ee2572b4a4c6bc5c3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5bd260948a7ca5a455fda542ff454f2e7cdec4781a23ee2572b4a4c6bc5c3eb->enter($__internal_f5bd260948a7ca5a455fda542ff454f2e7cdec4781a23ee2572b4a4c6bc5c3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f5bd260948a7ca5a455fda542ff454f2e7cdec4781a23ee2572b4a4c6bc5c3eb->leave($__internal_f5bd260948a7ca5a455fda542ff454f2e7cdec4781a23ee2572b4a4c6bc5c3eb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

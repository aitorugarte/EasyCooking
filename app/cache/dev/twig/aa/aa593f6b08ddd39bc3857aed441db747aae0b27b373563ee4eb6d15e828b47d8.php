<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_8fba5c5697898b39c7af9b84e38757e94be5dbc7c0075c3b2301dbb9029262d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_8663073b2e8034328410dcc6d0592cabf9cd58687dee43c9dcc303ac417e879f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8663073b2e8034328410dcc6d0592cabf9cd58687dee43c9dcc303ac417e879f->enter($__internal_8663073b2e8034328410dcc6d0592cabf9cd58687dee43c9dcc303ac417e879f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8663073b2e8034328410dcc6d0592cabf9cd58687dee43c9dcc303ac417e879f->leave($__internal_8663073b2e8034328410dcc6d0592cabf9cd58687dee43c9dcc303ac417e879f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_be804da7ab342c1df972695a23ef8fcce940d65af8b8586f8e8366be984026c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be804da7ab342c1df972695a23ef8fcce940d65af8b8586f8e8366be984026c3->enter($__internal_be804da7ab342c1df972695a23ef8fcce940d65af8b8586f8e8366be984026c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_be804da7ab342c1df972695a23ef8fcce940d65af8b8586f8e8366be984026c3->leave($__internal_be804da7ab342c1df972695a23ef8fcce940d65af8b8586f8e8366be984026c3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_de16d2471efb9fab47d14119fb588704ff146e330625643c09fe5d6d31696234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de16d2471efb9fab47d14119fb588704ff146e330625643c09fe5d6d31696234->enter($__internal_de16d2471efb9fab47d14119fb588704ff146e330625643c09fe5d6d31696234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_de16d2471efb9fab47d14119fb588704ff146e330625643c09fe5d6d31696234->leave($__internal_de16d2471efb9fab47d14119fb588704ff146e330625643c09fe5d6d31696234_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}

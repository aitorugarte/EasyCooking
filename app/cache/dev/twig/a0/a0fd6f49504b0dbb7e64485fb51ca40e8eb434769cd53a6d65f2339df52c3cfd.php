<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f97c8a1787df839bdffafdd4590367c492bf691f87a5dbc9f4c5c6a8ef593ec9 extends Twig_Template
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
        $__internal_b3580e718c01386972e00d3cc82269884854e42ae1f7a6bd0228a4a96fe98f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3580e718c01386972e00d3cc82269884854e42ae1f7a6bd0228a4a96fe98f44->enter($__internal_b3580e718c01386972e00d3cc82269884854e42ae1f7a6bd0228a4a96fe98f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3580e718c01386972e00d3cc82269884854e42ae1f7a6bd0228a4a96fe98f44->leave($__internal_b3580e718c01386972e00d3cc82269884854e42ae1f7a6bd0228a4a96fe98f44_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b7855fbb41ce8b7d0f0ce7b9c8a04220272dd26976d7849d2cd141b75a96d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7855fbb41ce8b7d0f0ce7b9c8a04220272dd26976d7849d2cd141b75a96d46->enter($__internal_4b7855fbb41ce8b7d0f0ce7b9c8a04220272dd26976d7849d2cd141b75a96d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4b7855fbb41ce8b7d0f0ce7b9c8a04220272dd26976d7849d2cd141b75a96d46->leave($__internal_4b7855fbb41ce8b7d0f0ce7b9c8a04220272dd26976d7849d2cd141b75a96d46_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfe6b13b96898f0d09f215ed4d79011392abd3d60834fc501a298be797560744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe6b13b96898f0d09f215ed4d79011392abd3d60834fc501a298be797560744->enter($__internal_dfe6b13b96898f0d09f215ed4d79011392abd3d60834fc501a298be797560744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dfe6b13b96898f0d09f215ed4d79011392abd3d60834fc501a298be797560744->leave($__internal_dfe6b13b96898f0d09f215ed4d79011392abd3d60834fc501a298be797560744_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbac17fad5eba6f56fec255303d671d33a22118b7e29d7db4da164efc0d72630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbac17fad5eba6f56fec255303d671d33a22118b7e29d7db4da164efc0d72630->enter($__internal_cbac17fad5eba6f56fec255303d671d33a22118b7e29d7db4da164efc0d72630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cbac17fad5eba6f56fec255303d671d33a22118b7e29d7db4da164efc0d72630->leave($__internal_cbac17fad5eba6f56fec255303d671d33a22118b7e29d7db4da164efc0d72630_prof);

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

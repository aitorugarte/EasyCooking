<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c3e78761fe2570c702bbd8a607479b014bd2d8ab2cf2bedc98a9d055b8d3e588 extends Twig_Template
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
        $__internal_aa19c167cf051dc3e2227d39c546ae1a0d91a4729c79a7a2b7a19879188bca90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa19c167cf051dc3e2227d39c546ae1a0d91a4729c79a7a2b7a19879188bca90->enter($__internal_aa19c167cf051dc3e2227d39c546ae1a0d91a4729c79a7a2b7a19879188bca90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa19c167cf051dc3e2227d39c546ae1a0d91a4729c79a7a2b7a19879188bca90->leave($__internal_aa19c167cf051dc3e2227d39c546ae1a0d91a4729c79a7a2b7a19879188bca90_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b95cdffff5c2669830bd593ea1ca0839404480297a793733221b2615fe5da5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95cdffff5c2669830bd593ea1ca0839404480297a793733221b2615fe5da5c8->enter($__internal_b95cdffff5c2669830bd593ea1ca0839404480297a793733221b2615fe5da5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b95cdffff5c2669830bd593ea1ca0839404480297a793733221b2615fe5da5c8->leave($__internal_b95cdffff5c2669830bd593ea1ca0839404480297a793733221b2615fe5da5c8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_44bd5c5154271548d7288ee7996c4a462be9d351dace78c6313cfc9693af6944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44bd5c5154271548d7288ee7996c4a462be9d351dace78c6313cfc9693af6944->enter($__internal_44bd5c5154271548d7288ee7996c4a462be9d351dace78c6313cfc9693af6944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_44bd5c5154271548d7288ee7996c4a462be9d351dace78c6313cfc9693af6944->leave($__internal_44bd5c5154271548d7288ee7996c4a462be9d351dace78c6313cfc9693af6944_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ec0161665ee0fc70c77fbf56fe3655be9ffe2bc8cb2537e5ed6684764f4383a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec0161665ee0fc70c77fbf56fe3655be9ffe2bc8cb2537e5ed6684764f4383a->enter($__internal_3ec0161665ee0fc70c77fbf56fe3655be9ffe2bc8cb2537e5ed6684764f4383a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3ec0161665ee0fc70c77fbf56fe3655be9ffe2bc8cb2537e5ed6684764f4383a->leave($__internal_3ec0161665ee0fc70c77fbf56fe3655be9ffe2bc8cb2537e5ed6684764f4383a_prof);

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

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
        $__internal_f5f72ced1586470a41144df96f7d52dddcbf7f22d0f059f4f4bbdf4c6342794c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f72ced1586470a41144df96f7d52dddcbf7f22d0f059f4f4bbdf4c6342794c->enter($__internal_f5f72ced1586470a41144df96f7d52dddcbf7f22d0f059f4f4bbdf4c6342794c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5f72ced1586470a41144df96f7d52dddcbf7f22d0f059f4f4bbdf4c6342794c->leave($__internal_f5f72ced1586470a41144df96f7d52dddcbf7f22d0f059f4f4bbdf4c6342794c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f90998d572fcd85c6b938396c62f0f6d7294b7605f3df500979a0eeadcd7b7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90998d572fcd85c6b938396c62f0f6d7294b7605f3df500979a0eeadcd7b7c9->enter($__internal_f90998d572fcd85c6b938396c62f0f6d7294b7605f3df500979a0eeadcd7b7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f90998d572fcd85c6b938396c62f0f6d7294b7605f3df500979a0eeadcd7b7c9->leave($__internal_f90998d572fcd85c6b938396c62f0f6d7294b7605f3df500979a0eeadcd7b7c9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2238f38f98dbd976ca2f6ea1d5ee6ebeccad9b286cd2a78216dac594c1bface = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2238f38f98dbd976ca2f6ea1d5ee6ebeccad9b286cd2a78216dac594c1bface->enter($__internal_b2238f38f98dbd976ca2f6ea1d5ee6ebeccad9b286cd2a78216dac594c1bface_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b2238f38f98dbd976ca2f6ea1d5ee6ebeccad9b286cd2a78216dac594c1bface->leave($__internal_b2238f38f98dbd976ca2f6ea1d5ee6ebeccad9b286cd2a78216dac594c1bface_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7a75b6fa051ce0f3e1841ee91e9cbe5b7bad8afc27cd40a02753c3c4177c01d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a75b6fa051ce0f3e1841ee91e9cbe5b7bad8afc27cd40a02753c3c4177c01d->enter($__internal_c7a75b6fa051ce0f3e1841ee91e9cbe5b7bad8afc27cd40a02753c3c4177c01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c7a75b6fa051ce0f3e1841ee91e9cbe5b7bad8afc27cd40a02753c3c4177c01d->leave($__internal_c7a75b6fa051ce0f3e1841ee91e9cbe5b7bad8afc27cd40a02753c3c4177c01d_prof);

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

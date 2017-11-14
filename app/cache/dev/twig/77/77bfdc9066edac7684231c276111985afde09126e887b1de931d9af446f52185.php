<?php

/* @BloggerBlog/layout.html.twig */
class __TwigTemplate_b5fca1faf499c62b444bce44e3716e26e2ed72244b17a16ce15bbe737efdc59a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@BloggerBlog/layout.html.twig", 2);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ef5a6f987e94101ca0be35a0eef6fbe71025a948c2de70f9973492251bd3d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef5a6f987e94101ca0be35a0eef6fbe71025a948c2de70f9973492251bd3d45->enter($__internal_6ef5a6f987e94101ca0be35a0eef6fbe71025a948c2de70f9973492251bd3d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ef5a6f987e94101ca0be35a0eef6fbe71025a948c2de70f9973492251bd3d45->leave($__internal_6ef5a6f987e94101ca0be35a0eef6fbe71025a948c2de70f9973492251bd3d45_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_88dd9feda07155f50c870c85e9dd68a7bbecd22310db5441009934bda2c25bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88dd9feda07155f50c870c85e9dd68a7bbecd22310db5441009934bda2c25bae->enter($__internal_88dd9feda07155f50c870c85e9dd68a7bbecd22310db5441009934bda2c25bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    ¿Qué ponemos aquí?
";
        
        $__internal_88dd9feda07155f50c870c85e9dd68a7bbecd22310db5441009934bda2c25bae->leave($__internal_88dd9feda07155f50c870c85e9dd68a7bbecd22310db5441009934bda2c25bae_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}

{% block sidebar %}
    ¿Qué ponemos aquí?
{% endblock %}
", "@BloggerBlog/layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle\\Resources\\views\\layout.html.twig");
    }
}

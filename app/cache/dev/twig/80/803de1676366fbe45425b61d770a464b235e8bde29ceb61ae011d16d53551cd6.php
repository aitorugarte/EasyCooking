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
        $__internal_2e5e4e2a1df6fc6aaf93fbe9a23ac15e431abd6419d542de4e9ea8a9a149aa56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5e4e2a1df6fc6aaf93fbe9a23ac15e431abd6419d542de4e9ea8a9a149aa56->enter($__internal_2e5e4e2a1df6fc6aaf93fbe9a23ac15e431abd6419d542de4e9ea8a9a149aa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e5e4e2a1df6fc6aaf93fbe9a23ac15e431abd6419d542de4e9ea8a9a149aa56->leave($__internal_2e5e4e2a1df6fc6aaf93fbe9a23ac15e431abd6419d542de4e9ea8a9a149aa56_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b796628877a8c52f04cf2b76d2e1976a42ca761eb41e1aa450e6793cde10ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b796628877a8c52f04cf2b76d2e1976a42ca761eb41e1aa450e6793cde10ed6->enter($__internal_0b796628877a8c52f04cf2b76d2e1976a42ca761eb41e1aa450e6793cde10ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0b796628877a8c52f04cf2b76d2e1976a42ca761eb41e1aa450e6793cde10ed6->leave($__internal_0b796628877a8c52f04cf2b76d2e1976a42ca761eb41e1aa450e6793cde10ed6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a05e10f43c3d8844e1fce4331f45bfc4ab1361ea1887d3923752026c1723295b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05e10f43c3d8844e1fce4331f45bfc4ab1361ea1887d3923752026c1723295b->enter($__internal_a05e10f43c3d8844e1fce4331f45bfc4ab1361ea1887d3923752026c1723295b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a05e10f43c3d8844e1fce4331f45bfc4ab1361ea1887d3923752026c1723295b->leave($__internal_a05e10f43c3d8844e1fce4331f45bfc4ab1361ea1887d3923752026c1723295b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_98526b7cfb7de2a071a0c5fcbd9c07524286e2f4ca52142cad72cbb4e29c9897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98526b7cfb7de2a071a0c5fcbd9c07524286e2f4ca52142cad72cbb4e29c9897->enter($__internal_98526b7cfb7de2a071a0c5fcbd9c07524286e2f4ca52142cad72cbb4e29c9897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_98526b7cfb7de2a071a0c5fcbd9c07524286e2f4ca52142cad72cbb4e29c9897->leave($__internal_98526b7cfb7de2a071a0c5fcbd9c07524286e2f4ca52142cad72cbb4e29c9897_prof);

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

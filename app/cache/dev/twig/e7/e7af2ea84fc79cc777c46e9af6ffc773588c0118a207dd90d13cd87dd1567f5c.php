<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8c79dc4721822c3da769f6e883fd81b1d7f92d660e13d05deff15f545a258dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1707250f42b19a1d8de718e8780dd43a1aa3d18eed128720de40e020468feff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1707250f42b19a1d8de718e8780dd43a1aa3d18eed128720de40e020468feff->enter($__internal_f1707250f42b19a1d8de718e8780dd43a1aa3d18eed128720de40e020468feff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1707250f42b19a1d8de718e8780dd43a1aa3d18eed128720de40e020468feff->leave($__internal_f1707250f42b19a1d8de718e8780dd43a1aa3d18eed128720de40e020468feff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_73e6f3b94e3e20421e439f094335281a4bf9201ea169cf9c85bf653fafb0b4fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e6f3b94e3e20421e439f094335281a4bf9201ea169cf9c85bf653fafb0b4fe->enter($__internal_73e6f3b94e3e20421e439f094335281a4bf9201ea169cf9c85bf653fafb0b4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_73e6f3b94e3e20421e439f094335281a4bf9201ea169cf9c85bf653fafb0b4fe->leave($__internal_73e6f3b94e3e20421e439f094335281a4bf9201ea169cf9c85bf653fafb0b4fe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_938fb1ab09859173f7c2ce696bcb69f355e8c1f159bf5d29508d0ecc8125d656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938fb1ab09859173f7c2ce696bcb69f355e8c1f159bf5d29508d0ecc8125d656->enter($__internal_938fb1ab09859173f7c2ce696bcb69f355e8c1f159bf5d29508d0ecc8125d656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_938fb1ab09859173f7c2ce696bcb69f355e8c1f159bf5d29508d0ecc8125d656->leave($__internal_938fb1ab09859173f7c2ce696bcb69f355e8c1f159bf5d29508d0ecc8125d656_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5cee9be2c9228352f23111c264a4e7edd4fe0ebd291ecf15d5bf859b8565b6a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cee9be2c9228352f23111c264a4e7edd4fe0ebd291ecf15d5bf859b8565b6a6->enter($__internal_5cee9be2c9228352f23111c264a4e7edd4fe0ebd291ecf15d5bf859b8565b6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5cee9be2c9228352f23111c264a4e7edd4fe0ebd291ecf15d5bf859b8565b6a6->leave($__internal_5cee9be2c9228352f23111c264a4e7edd4fe0ebd291ecf15d5bf859b8565b6a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

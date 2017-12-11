<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_aed170cb720940774f89cdaa5bc1c8a29ac22266d3e3cba689d8c2037089f1c0 extends Twig_Template
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
        $__internal_33e4e06c47a2f54745212e3817ef1d0d45019d5a5e082dca74263ac177f51be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e4e06c47a2f54745212e3817ef1d0d45019d5a5e082dca74263ac177f51be5->enter($__internal_33e4e06c47a2f54745212e3817ef1d0d45019d5a5e082dca74263ac177f51be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33e4e06c47a2f54745212e3817ef1d0d45019d5a5e082dca74263ac177f51be5->leave($__internal_33e4e06c47a2f54745212e3817ef1d0d45019d5a5e082dca74263ac177f51be5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_29bd4a0c9f09b68a7ef9c208969e2bd412c16828f51b6fc5ab7d60e90d17a1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29bd4a0c9f09b68a7ef9c208969e2bd412c16828f51b6fc5ab7d60e90d17a1c9->enter($__internal_29bd4a0c9f09b68a7ef9c208969e2bd412c16828f51b6fc5ab7d60e90d17a1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_29bd4a0c9f09b68a7ef9c208969e2bd412c16828f51b6fc5ab7d60e90d17a1c9->leave($__internal_29bd4a0c9f09b68a7ef9c208969e2bd412c16828f51b6fc5ab7d60e90d17a1c9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7aa8b2885dde4d49aed938c164307f98cfe6e5e40f47ae0a749080e18668dbe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa8b2885dde4d49aed938c164307f98cfe6e5e40f47ae0a749080e18668dbe6->enter($__internal_7aa8b2885dde4d49aed938c164307f98cfe6e5e40f47ae0a749080e18668dbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7aa8b2885dde4d49aed938c164307f98cfe6e5e40f47ae0a749080e18668dbe6->leave($__internal_7aa8b2885dde4d49aed938c164307f98cfe6e5e40f47ae0a749080e18668dbe6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4b283c6b777c652386052ded4226d59df7f5ec80e99913cfad8b99ea0095126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b283c6b777c652386052ded4226d59df7f5ec80e99913cfad8b99ea0095126->enter($__internal_f4b283c6b777c652386052ded4226d59df7f5ec80e99913cfad8b99ea0095126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f4b283c6b777c652386052ded4226d59df7f5ec80e99913cfad8b99ea0095126->leave($__internal_f4b283c6b777c652386052ded4226d59df7f5ec80e99913cfad8b99ea0095126_prof);

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

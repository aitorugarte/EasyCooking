<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e4d70fa4b26812d0270b58d85759914e4f58f09509c07ef3d8768d1fff4610e8 extends Twig_Template
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
        $__internal_6e2009837e321f3be55ce2467ba69f53bf1e33e76034da3d17c36fe91159c132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2009837e321f3be55ce2467ba69f53bf1e33e76034da3d17c36fe91159c132->enter($__internal_6e2009837e321f3be55ce2467ba69f53bf1e33e76034da3d17c36fe91159c132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e2009837e321f3be55ce2467ba69f53bf1e33e76034da3d17c36fe91159c132->leave($__internal_6e2009837e321f3be55ce2467ba69f53bf1e33e76034da3d17c36fe91159c132_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f17baaa9522f09fcafab68d15721ee1c32cf0545188c83c45fc62f41d0c4b426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17baaa9522f09fcafab68d15721ee1c32cf0545188c83c45fc62f41d0c4b426->enter($__internal_f17baaa9522f09fcafab68d15721ee1c32cf0545188c83c45fc62f41d0c4b426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f17baaa9522f09fcafab68d15721ee1c32cf0545188c83c45fc62f41d0c4b426->leave($__internal_f17baaa9522f09fcafab68d15721ee1c32cf0545188c83c45fc62f41d0c4b426_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f85e8e8d055b725d18107037cf564dc8ee85cac13992e75e4856c07c7324e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f85e8e8d055b725d18107037cf564dc8ee85cac13992e75e4856c07c7324e12->enter($__internal_7f85e8e8d055b725d18107037cf564dc8ee85cac13992e75e4856c07c7324e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7f85e8e8d055b725d18107037cf564dc8ee85cac13992e75e4856c07c7324e12->leave($__internal_7f85e8e8d055b725d18107037cf564dc8ee85cac13992e75e4856c07c7324e12_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36f0bb17f77a2ccdc17fb5e864a0c40e3a3e39aa2a45ed4c574af21e986e05e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f0bb17f77a2ccdc17fb5e864a0c40e3a3e39aa2a45ed4c574af21e986e05e7->enter($__internal_36f0bb17f77a2ccdc17fb5e864a0c40e3a3e39aa2a45ed4c574af21e986e05e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_36f0bb17f77a2ccdc17fb5e864a0c40e3a3e39aa2a45ed4c574af21e986e05e7->leave($__internal_36f0bb17f77a2ccdc17fb5e864a0c40e3a3e39aa2a45ed4c574af21e986e05e7_prof);

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

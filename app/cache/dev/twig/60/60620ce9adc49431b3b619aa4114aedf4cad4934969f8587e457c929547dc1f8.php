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
        $__internal_c3433ba2e9d9dbefa33a650b8b6b678d5ad9c47cd6796210ff53273647066721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3433ba2e9d9dbefa33a650b8b6b678d5ad9c47cd6796210ff53273647066721->enter($__internal_c3433ba2e9d9dbefa33a650b8b6b678d5ad9c47cd6796210ff53273647066721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3433ba2e9d9dbefa33a650b8b6b678d5ad9c47cd6796210ff53273647066721->leave($__internal_c3433ba2e9d9dbefa33a650b8b6b678d5ad9c47cd6796210ff53273647066721_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_45448d704b724bb1cb47779752b17b733424ac514c6e43a237eeaeb3c5bb10f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45448d704b724bb1cb47779752b17b733424ac514c6e43a237eeaeb3c5bb10f3->enter($__internal_45448d704b724bb1cb47779752b17b733424ac514c6e43a237eeaeb3c5bb10f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_45448d704b724bb1cb47779752b17b733424ac514c6e43a237eeaeb3c5bb10f3->leave($__internal_45448d704b724bb1cb47779752b17b733424ac514c6e43a237eeaeb3c5bb10f3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f52952df0efc8442fd16e4cc7318a32282b7867f3d6938243205fdfef8effd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f52952df0efc8442fd16e4cc7318a32282b7867f3d6938243205fdfef8effd1->enter($__internal_0f52952df0efc8442fd16e4cc7318a32282b7867f3d6938243205fdfef8effd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0f52952df0efc8442fd16e4cc7318a32282b7867f3d6938243205fdfef8effd1->leave($__internal_0f52952df0efc8442fd16e4cc7318a32282b7867f3d6938243205fdfef8effd1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_943463407278a2880f24e39411b11a85d83462333ef7b7197a28a4a04834a66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943463407278a2880f24e39411b11a85d83462333ef7b7197a28a4a04834a66a->enter($__internal_943463407278a2880f24e39411b11a85d83462333ef7b7197a28a4a04834a66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_943463407278a2880f24e39411b11a85d83462333ef7b7197a28a4a04834a66a->leave($__internal_943463407278a2880f24e39411b11a85d83462333ef7b7197a28a4a04834a66a_prof);

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

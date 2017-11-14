<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f492cb492156c9f972a8de01df4b158f7757e607c029cd381c2b31fbf7b282b6 extends Twig_Template
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
        $__internal_7a9140ce5ae0367468f28476114f304c1d106fe648ec3e7a180f0154559063ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9140ce5ae0367468f28476114f304c1d106fe648ec3e7a180f0154559063ba->enter($__internal_7a9140ce5ae0367468f28476114f304c1d106fe648ec3e7a180f0154559063ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a9140ce5ae0367468f28476114f304c1d106fe648ec3e7a180f0154559063ba->leave($__internal_7a9140ce5ae0367468f28476114f304c1d106fe648ec3e7a180f0154559063ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ca6f2f67a4aa6efedcd8e43c7ff2882f32b8a20bf3bb9c4c8e888f40e099804f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6f2f67a4aa6efedcd8e43c7ff2882f32b8a20bf3bb9c4c8e888f40e099804f->enter($__internal_ca6f2f67a4aa6efedcd8e43c7ff2882f32b8a20bf3bb9c4c8e888f40e099804f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ca6f2f67a4aa6efedcd8e43c7ff2882f32b8a20bf3bb9c4c8e888f40e099804f->leave($__internal_ca6f2f67a4aa6efedcd8e43c7ff2882f32b8a20bf3bb9c4c8e888f40e099804f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f547d1bd3fe2507502c57971f090f5eeab07a15473ed43ceaaee8aaa3286654a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f547d1bd3fe2507502c57971f090f5eeab07a15473ed43ceaaee8aaa3286654a->enter($__internal_f547d1bd3fe2507502c57971f090f5eeab07a15473ed43ceaaee8aaa3286654a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f547d1bd3fe2507502c57971f090f5eeab07a15473ed43ceaaee8aaa3286654a->leave($__internal_f547d1bd3fe2507502c57971f090f5eeab07a15473ed43ceaaee8aaa3286654a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a400edbdd1c22e1f3bc5b47dbff076591cf053454d579669664ad73485f83c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a400edbdd1c22e1f3bc5b47dbff076591cf053454d579669664ad73485f83c2b->enter($__internal_a400edbdd1c22e1f3bc5b47dbff076591cf053454d579669664ad73485f83c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a400edbdd1c22e1f3bc5b47dbff076591cf053454d579669664ad73485f83c2b->leave($__internal_a400edbdd1c22e1f3bc5b47dbff076591cf053454d579669664ad73485f83c2b_prof);

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

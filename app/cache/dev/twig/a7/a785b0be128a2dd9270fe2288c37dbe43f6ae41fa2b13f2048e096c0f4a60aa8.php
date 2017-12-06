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
        $__internal_d45030db58225bb9a202c93d5bd8683f46e9a561ced031f88af3ec19d2f0c0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45030db58225bb9a202c93d5bd8683f46e9a561ced031f88af3ec19d2f0c0ab->enter($__internal_d45030db58225bb9a202c93d5bd8683f46e9a561ced031f88af3ec19d2f0c0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d45030db58225bb9a202c93d5bd8683f46e9a561ced031f88af3ec19d2f0c0ab->leave($__internal_d45030db58225bb9a202c93d5bd8683f46e9a561ced031f88af3ec19d2f0c0ab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fad7e5233ef87598439d704fd29833daed27f4db7332c4d36d834655f3463183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad7e5233ef87598439d704fd29833daed27f4db7332c4d36d834655f3463183->enter($__internal_fad7e5233ef87598439d704fd29833daed27f4db7332c4d36d834655f3463183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fad7e5233ef87598439d704fd29833daed27f4db7332c4d36d834655f3463183->leave($__internal_fad7e5233ef87598439d704fd29833daed27f4db7332c4d36d834655f3463183_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d5e150224c3aba90958947abb8b6739aba97d5b51d8838b16828d77bbf8f9ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e150224c3aba90958947abb8b6739aba97d5b51d8838b16828d77bbf8f9ac2->enter($__internal_d5e150224c3aba90958947abb8b6739aba97d5b51d8838b16828d77bbf8f9ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d5e150224c3aba90958947abb8b6739aba97d5b51d8838b16828d77bbf8f9ac2->leave($__internal_d5e150224c3aba90958947abb8b6739aba97d5b51d8838b16828d77bbf8f9ac2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3637fd535aeb54825f6683dab818fcdc92cc1aa2a0363d7216f7fe7561279d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3637fd535aeb54825f6683dab818fcdc92cc1aa2a0363d7216f7fe7561279d8->enter($__internal_c3637fd535aeb54825f6683dab818fcdc92cc1aa2a0363d7216f7fe7561279d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c3637fd535aeb54825f6683dab818fcdc92cc1aa2a0363d7216f7fe7561279d8->leave($__internal_c3637fd535aeb54825f6683dab818fcdc92cc1aa2a0363d7216f7fe7561279d8_prof);

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

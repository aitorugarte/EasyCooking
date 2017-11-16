<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d02573ad3e1931d251f7b5eb8a85540b2b7bce5f05c854983ca14b6afaa602c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_2cd697460f731641ed36f15f4cca2a1ae6fd0a024cbc6e268693363da809b671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd697460f731641ed36f15f4cca2a1ae6fd0a024cbc6e268693363da809b671->enter($__internal_2cd697460f731641ed36f15f4cca2a1ae6fd0a024cbc6e268693363da809b671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cd697460f731641ed36f15f4cca2a1ae6fd0a024cbc6e268693363da809b671->leave($__internal_2cd697460f731641ed36f15f4cca2a1ae6fd0a024cbc6e268693363da809b671_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_406e817a054aa8c44f160aad6a1ffc9f6d501f932036596fa3c3ec6a3bd43f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406e817a054aa8c44f160aad6a1ffc9f6d501f932036596fa3c3ec6a3bd43f47->enter($__internal_406e817a054aa8c44f160aad6a1ffc9f6d501f932036596fa3c3ec6a3bd43f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_406e817a054aa8c44f160aad6a1ffc9f6d501f932036596fa3c3ec6a3bd43f47->leave($__internal_406e817a054aa8c44f160aad6a1ffc9f6d501f932036596fa3c3ec6a3bd43f47_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c3cebca74352290313f1bbd0d704e008654e970cc79fc7dd5c297650ef9c4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3cebca74352290313f1bbd0d704e008654e970cc79fc7dd5c297650ef9c4b3->enter($__internal_5c3cebca74352290313f1bbd0d704e008654e970cc79fc7dd5c297650ef9c4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5c3cebca74352290313f1bbd0d704e008654e970cc79fc7dd5c297650ef9c4b3->leave($__internal_5c3cebca74352290313f1bbd0d704e008654e970cc79fc7dd5c297650ef9c4b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eae8cbd239b34d97119641d528494de9581e72f9beb9981dbcf987e8e604c486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae8cbd239b34d97119641d528494de9581e72f9beb9981dbcf987e8e604c486->enter($__internal_eae8cbd239b34d97119641d528494de9581e72f9beb9981dbcf987e8e604c486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eae8cbd239b34d97119641d528494de9581e72f9beb9981dbcf987e8e604c486->leave($__internal_eae8cbd239b34d97119641d528494de9581e72f9beb9981dbcf987e8e604c486_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

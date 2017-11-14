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
        $__internal_0a171d272a0f4e362478f441b25c7e1b8b5b6b9e27c63d16112082e834c7969f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a171d272a0f4e362478f441b25c7e1b8b5b6b9e27c63d16112082e834c7969f->enter($__internal_0a171d272a0f4e362478f441b25c7e1b8b5b6b9e27c63d16112082e834c7969f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a171d272a0f4e362478f441b25c7e1b8b5b6b9e27c63d16112082e834c7969f->leave($__internal_0a171d272a0f4e362478f441b25c7e1b8b5b6b9e27c63d16112082e834c7969f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33f55c95d53c554557c569224f8b5d50b757e2b80f4e6874c113915a092156e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f55c95d53c554557c569224f8b5d50b757e2b80f4e6874c113915a092156e7->enter($__internal_33f55c95d53c554557c569224f8b5d50b757e2b80f4e6874c113915a092156e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_33f55c95d53c554557c569224f8b5d50b757e2b80f4e6874c113915a092156e7->leave($__internal_33f55c95d53c554557c569224f8b5d50b757e2b80f4e6874c113915a092156e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_759e121b554102197abb7e511a33ce9a5bb05bb99ca233b10f908fd25ff61f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759e121b554102197abb7e511a33ce9a5bb05bb99ca233b10f908fd25ff61f9e->enter($__internal_759e121b554102197abb7e511a33ce9a5bb05bb99ca233b10f908fd25ff61f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_759e121b554102197abb7e511a33ce9a5bb05bb99ca233b10f908fd25ff61f9e->leave($__internal_759e121b554102197abb7e511a33ce9a5bb05bb99ca233b10f908fd25ff61f9e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_661222597438204bbe20a0fb6c315fee2450f733b74976837834d7a8b961a525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661222597438204bbe20a0fb6c315fee2450f733b74976837834d7a8b961a525->enter($__internal_661222597438204bbe20a0fb6c315fee2450f733b74976837834d7a8b961a525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_661222597438204bbe20a0fb6c315fee2450f733b74976837834d7a8b961a525->leave($__internal_661222597438204bbe20a0fb6c315fee2450f733b74976837834d7a8b961a525_prof);

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

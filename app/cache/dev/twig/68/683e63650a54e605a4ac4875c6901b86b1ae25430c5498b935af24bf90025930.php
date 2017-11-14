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
        $__internal_f2275acd86c759910cb903028b40a8ddb9c4fe3aa573f469e06649c30c03d995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2275acd86c759910cb903028b40a8ddb9c4fe3aa573f469e06649c30c03d995->enter($__internal_f2275acd86c759910cb903028b40a8ddb9c4fe3aa573f469e06649c30c03d995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2275acd86c759910cb903028b40a8ddb9c4fe3aa573f469e06649c30c03d995->leave($__internal_f2275acd86c759910cb903028b40a8ddb9c4fe3aa573f469e06649c30c03d995_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a6b68761da10b55b99d012002f70eb81b0e93184ac766c8bb9b13f93187e8dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6b68761da10b55b99d012002f70eb81b0e93184ac766c8bb9b13f93187e8dc->enter($__internal_9a6b68761da10b55b99d012002f70eb81b0e93184ac766c8bb9b13f93187e8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9a6b68761da10b55b99d012002f70eb81b0e93184ac766c8bb9b13f93187e8dc->leave($__internal_9a6b68761da10b55b99d012002f70eb81b0e93184ac766c8bb9b13f93187e8dc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9a56b2bd54a19a0fdcd3e90f51bb7b6bad896fc0fb2873aae8dca1db3035c95b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a56b2bd54a19a0fdcd3e90f51bb7b6bad896fc0fb2873aae8dca1db3035c95b->enter($__internal_9a56b2bd54a19a0fdcd3e90f51bb7b6bad896fc0fb2873aae8dca1db3035c95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9a56b2bd54a19a0fdcd3e90f51bb7b6bad896fc0fb2873aae8dca1db3035c95b->leave($__internal_9a56b2bd54a19a0fdcd3e90f51bb7b6bad896fc0fb2873aae8dca1db3035c95b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_602b723ca54f12d590a48ea2f47ca6fc8174774e422a9d80ffdc15a615ae41d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602b723ca54f12d590a48ea2f47ca6fc8174774e422a9d80ffdc15a615ae41d0->enter($__internal_602b723ca54f12d590a48ea2f47ca6fc8174774e422a9d80ffdc15a615ae41d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_602b723ca54f12d590a48ea2f47ca6fc8174774e422a9d80ffdc15a615ae41d0->leave($__internal_602b723ca54f12d590a48ea2f47ca6fc8174774e422a9d80ffdc15a615ae41d0_prof);

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

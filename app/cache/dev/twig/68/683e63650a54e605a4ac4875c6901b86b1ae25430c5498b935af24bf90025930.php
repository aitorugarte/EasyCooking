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
        $__internal_644c467238979575702e1a934dc3a2fe23cfe00f0b633967bff039b8db32d56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644c467238979575702e1a934dc3a2fe23cfe00f0b633967bff039b8db32d56c->enter($__internal_644c467238979575702e1a934dc3a2fe23cfe00f0b633967bff039b8db32d56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_644c467238979575702e1a934dc3a2fe23cfe00f0b633967bff039b8db32d56c->leave($__internal_644c467238979575702e1a934dc3a2fe23cfe00f0b633967bff039b8db32d56c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d109db021c24177b9755e1f96e59ad4f3f41f88f6a1043eee0a5e36e9fc8207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d109db021c24177b9755e1f96e59ad4f3f41f88f6a1043eee0a5e36e9fc8207->enter($__internal_4d109db021c24177b9755e1f96e59ad4f3f41f88f6a1043eee0a5e36e9fc8207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4d109db021c24177b9755e1f96e59ad4f3f41f88f6a1043eee0a5e36e9fc8207->leave($__internal_4d109db021c24177b9755e1f96e59ad4f3f41f88f6a1043eee0a5e36e9fc8207_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41d45e6bea2cc054a911a7905f36e1213321cf626f98e1a7e5a6cb8966b209e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d45e6bea2cc054a911a7905f36e1213321cf626f98e1a7e5a6cb8966b209e7->enter($__internal_41d45e6bea2cc054a911a7905f36e1213321cf626f98e1a7e5a6cb8966b209e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_41d45e6bea2cc054a911a7905f36e1213321cf626f98e1a7e5a6cb8966b209e7->leave($__internal_41d45e6bea2cc054a911a7905f36e1213321cf626f98e1a7e5a6cb8966b209e7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b25ef7976eaf85978ed8f84413c0725279b0cb56b0cbc619b01623a5aa716a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25ef7976eaf85978ed8f84413c0725279b0cb56b0cbc619b01623a5aa716a9e->enter($__internal_b25ef7976eaf85978ed8f84413c0725279b0cb56b0cbc619b01623a5aa716a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b25ef7976eaf85978ed8f84413c0725279b0cb56b0cbc619b01623a5aa716a9e->leave($__internal_b25ef7976eaf85978ed8f84413c0725279b0cb56b0cbc619b01623a5aa716a9e_prof);

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

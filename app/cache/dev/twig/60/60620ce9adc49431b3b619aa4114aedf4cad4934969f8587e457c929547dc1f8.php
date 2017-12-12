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
        $__internal_9c4df17550c2d06b2c61665ff616f0694034c52058fdbbffaa8757633dc9c00f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4df17550c2d06b2c61665ff616f0694034c52058fdbbffaa8757633dc9c00f->enter($__internal_9c4df17550c2d06b2c61665ff616f0694034c52058fdbbffaa8757633dc9c00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c4df17550c2d06b2c61665ff616f0694034c52058fdbbffaa8757633dc9c00f->leave($__internal_9c4df17550c2d06b2c61665ff616f0694034c52058fdbbffaa8757633dc9c00f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0fd03a565e8821d9658a8a4e0db2e7a7d1697fed1236b7ac2276c66ffac3144f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd03a565e8821d9658a8a4e0db2e7a7d1697fed1236b7ac2276c66ffac3144f->enter($__internal_0fd03a565e8821d9658a8a4e0db2e7a7d1697fed1236b7ac2276c66ffac3144f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0fd03a565e8821d9658a8a4e0db2e7a7d1697fed1236b7ac2276c66ffac3144f->leave($__internal_0fd03a565e8821d9658a8a4e0db2e7a7d1697fed1236b7ac2276c66ffac3144f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_55f2b4c5ac0a456f89533877e92b4fe62e00086f8cef4acba7fcafc328fd4c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f2b4c5ac0a456f89533877e92b4fe62e00086f8cef4acba7fcafc328fd4c0c->enter($__internal_55f2b4c5ac0a456f89533877e92b4fe62e00086f8cef4acba7fcafc328fd4c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_55f2b4c5ac0a456f89533877e92b4fe62e00086f8cef4acba7fcafc328fd4c0c->leave($__internal_55f2b4c5ac0a456f89533877e92b4fe62e00086f8cef4acba7fcafc328fd4c0c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e6f4dd0476eb8619c7308fa049abb1a06a77a75e932bc5b1dc1a8807828ba88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6f4dd0476eb8619c7308fa049abb1a06a77a75e932bc5b1dc1a8807828ba88->enter($__internal_2e6f4dd0476eb8619c7308fa049abb1a06a77a75e932bc5b1dc1a8807828ba88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2e6f4dd0476eb8619c7308fa049abb1a06a77a75e932bc5b1dc1a8807828ba88->leave($__internal_2e6f4dd0476eb8619c7308fa049abb1a06a77a75e932bc5b1dc1a8807828ba88_prof);

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

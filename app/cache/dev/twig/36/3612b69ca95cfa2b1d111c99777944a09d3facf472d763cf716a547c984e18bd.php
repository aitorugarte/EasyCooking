<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b6131bd90daccf5af172ed490836fefa13892b9078781615be9d963a3411b4b0 extends Twig_Template
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
        $__internal_75ae52793fb3dca1ce10d3373fe19a4b4acf3955cb6294b462263c99c19655b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ae52793fb3dca1ce10d3373fe19a4b4acf3955cb6294b462263c99c19655b1->enter($__internal_75ae52793fb3dca1ce10d3373fe19a4b4acf3955cb6294b462263c99c19655b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75ae52793fb3dca1ce10d3373fe19a4b4acf3955cb6294b462263c99c19655b1->leave($__internal_75ae52793fb3dca1ce10d3373fe19a4b4acf3955cb6294b462263c99c19655b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6b1836a6d0d56e239a831c65c192f302bae2ac8bace3271eb84cdb370d003e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1836a6d0d56e239a831c65c192f302bae2ac8bace3271eb84cdb370d003e7a->enter($__internal_6b1836a6d0d56e239a831c65c192f302bae2ac8bace3271eb84cdb370d003e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6b1836a6d0d56e239a831c65c192f302bae2ac8bace3271eb84cdb370d003e7a->leave($__internal_6b1836a6d0d56e239a831c65c192f302bae2ac8bace3271eb84cdb370d003e7a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2204591600849d153b689cfac791960e89d2c48e3ba7229b51bcd9bdc878dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2204591600849d153b689cfac791960e89d2c48e3ba7229b51bcd9bdc878dd4->enter($__internal_d2204591600849d153b689cfac791960e89d2c48e3ba7229b51bcd9bdc878dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d2204591600849d153b689cfac791960e89d2c48e3ba7229b51bcd9bdc878dd4->leave($__internal_d2204591600849d153b689cfac791960e89d2c48e3ba7229b51bcd9bdc878dd4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a8c582b847ce3b94b65b9fbb294d0d174eef855e5a158e35b8a6d5aba4f9df30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c582b847ce3b94b65b9fbb294d0d174eef855e5a158e35b8a6d5aba4f9df30->enter($__internal_a8c582b847ce3b94b65b9fbb294d0d174eef855e5a158e35b8a6d5aba4f9df30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a8c582b847ce3b94b65b9fbb294d0d174eef855e5a158e35b8a6d5aba4f9df30->leave($__internal_a8c582b847ce3b94b65b9fbb294d0d174eef855e5a158e35b8a6d5aba4f9df30_prof);

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

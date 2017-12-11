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
        $__internal_cc4f472f8d138c1b18b4fb4043ca331b18245141a6efcb3832e73e885c1c51a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4f472f8d138c1b18b4fb4043ca331b18245141a6efcb3832e73e885c1c51a4->enter($__internal_cc4f472f8d138c1b18b4fb4043ca331b18245141a6efcb3832e73e885c1c51a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc4f472f8d138c1b18b4fb4043ca331b18245141a6efcb3832e73e885c1c51a4->leave($__internal_cc4f472f8d138c1b18b4fb4043ca331b18245141a6efcb3832e73e885c1c51a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_900c4ba7154185b199f5c7628a87d8be842826e76ea319af205f6ab913433de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900c4ba7154185b199f5c7628a87d8be842826e76ea319af205f6ab913433de8->enter($__internal_900c4ba7154185b199f5c7628a87d8be842826e76ea319af205f6ab913433de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_900c4ba7154185b199f5c7628a87d8be842826e76ea319af205f6ab913433de8->leave($__internal_900c4ba7154185b199f5c7628a87d8be842826e76ea319af205f6ab913433de8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9b8c61da87e56caa0be21c398a57d4debb357787f8f23483e60e14235ffcb991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8c61da87e56caa0be21c398a57d4debb357787f8f23483e60e14235ffcb991->enter($__internal_9b8c61da87e56caa0be21c398a57d4debb357787f8f23483e60e14235ffcb991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9b8c61da87e56caa0be21c398a57d4debb357787f8f23483e60e14235ffcb991->leave($__internal_9b8c61da87e56caa0be21c398a57d4debb357787f8f23483e60e14235ffcb991_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6815055a97b9d484558f4d9b8c0b4ef35b9799c1ec812839c339f4aa8d9af1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6815055a97b9d484558f4d9b8c0b4ef35b9799c1ec812839c339f4aa8d9af1ae->enter($__internal_6815055a97b9d484558f4d9b8c0b4ef35b9799c1ec812839c339f4aa8d9af1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6815055a97b9d484558f4d9b8c0b4ef35b9799c1ec812839c339f4aa8d9af1ae->leave($__internal_6815055a97b9d484558f4d9b8c0b4ef35b9799c1ec812839c339f4aa8d9af1ae_prof);

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

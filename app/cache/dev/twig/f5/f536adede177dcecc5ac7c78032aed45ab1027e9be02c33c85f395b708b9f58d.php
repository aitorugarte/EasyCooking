<?php

/* CookerCookingBundle::layout.html.twig */
class __TwigTemplate_a64ed364333730eae6cbe18ed506cf687fb0d46ebea9c5c87415ee80468c263f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "CookerCookingBundle::layout.html.twig", 2);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_250b03f63243f3278635b5f67c72878dac3dc31c57161351a5cfe41a9aa46d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250b03f63243f3278635b5f67c72878dac3dc31c57161351a5cfe41a9aa46d6b->enter($__internal_250b03f63243f3278635b5f67c72878dac3dc31c57161351a5cfe41a9aa46d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_250b03f63243f3278635b5f67c72878dac3dc31c57161351a5cfe41a9aa46d6b->leave($__internal_250b03f63243f3278635b5f67c72878dac3dc31c57161351a5cfe41a9aa46d6b_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b7087cd0d1ebef4d2f2e989f5d837f57321963805e61757739af47e5ca75191a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7087cd0d1ebef4d2f2e989f5d837f57321963805e61757739af47e5ca75191a->enter($__internal_b7087cd0d1ebef4d2f2e989f5d837f57321963805e61757739af47e5ca75191a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    �Qu� ponemos aqu�?
";
        
        $__internal_b7087cd0d1ebef4d2f2e989f5d837f57321963805e61757739af47e5ca75191a->leave($__internal_b7087cd0d1ebef4d2f2e989f5d837f57321963805e61757739af47e5ca75191a_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}

{% block sidebar %}
    �Qu� ponemos aqu�?
{% endblock %}
", "CookerCookingBundle::layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/layout.html.twig");
    }
}
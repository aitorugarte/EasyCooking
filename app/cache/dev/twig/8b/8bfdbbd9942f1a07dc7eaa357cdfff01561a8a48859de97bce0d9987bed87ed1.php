<?php

/* CookerCookingBundle::layout.html.twig */
class __TwigTemplate_42d1e9877eff77ca1ba47430962403d84569116d83475a8ac69e4695fe283784 extends Twig_Template
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
        $__internal_c4b6ffce8392d3b2254470847c45df06208edde3a899e73156e08da1778bf156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b6ffce8392d3b2254470847c45df06208edde3a899e73156e08da1778bf156->enter($__internal_c4b6ffce8392d3b2254470847c45df06208edde3a899e73156e08da1778bf156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4b6ffce8392d3b2254470847c45df06208edde3a899e73156e08da1778bf156->leave($__internal_c4b6ffce8392d3b2254470847c45df06208edde3a899e73156e08da1778bf156_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_80728324bfd6f02714284b88d34f007c4b2301b0e131b9f2c2578441d354c3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80728324bfd6f02714284b88d34f007c4b2301b0e131b9f2c2578441d354c3f1->enter($__internal_80728324bfd6f02714284b88d34f007c4b2301b0e131b9f2c2578441d354c3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    ¿Qué ponemos aquí?
";
        
        $__internal_80728324bfd6f02714284b88d34f007c4b2301b0e131b9f2c2578441d354c3f1->leave($__internal_80728324bfd6f02714284b88d34f007c4b2301b0e131b9f2c2578441d354c3f1_prof);

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
    ¿Qué ponemos aquí?
{% endblock %}
", "CookerCookingBundle::layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\layout.html.twig");
    }
}

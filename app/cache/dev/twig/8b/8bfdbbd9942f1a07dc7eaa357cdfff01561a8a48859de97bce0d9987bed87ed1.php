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
        $__internal_fb54a8e36a4c0b9545146f8c3c2155a6d013109184ca39339f754fab61bb3fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb54a8e36a4c0b9545146f8c3c2155a6d013109184ca39339f754fab61bb3fa2->enter($__internal_fb54a8e36a4c0b9545146f8c3c2155a6d013109184ca39339f754fab61bb3fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb54a8e36a4c0b9545146f8c3c2155a6d013109184ca39339f754fab61bb3fa2->leave($__internal_fb54a8e36a4c0b9545146f8c3c2155a6d013109184ca39339f754fab61bb3fa2_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_92b3117f6fdbe5c406cf04da0a440e0afc34f68c7c2b85713139c76e9c29da16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b3117f6fdbe5c406cf04da0a440e0afc34f68c7c2b85713139c76e9c29da16->enter($__internal_92b3117f6fdbe5c406cf04da0a440e0afc34f68c7c2b85713139c76e9c29da16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    ¿Qué ponemos aquí?
";
        
        $__internal_92b3117f6fdbe5c406cf04da0a440e0afc34f68c7c2b85713139c76e9c29da16->leave($__internal_92b3117f6fdbe5c406cf04da0a440e0afc34f68c7c2b85713139c76e9c29da16_prof);

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

<?php

/* @CookerCooking/layout.html.twig */
class __TwigTemplate_a7f2261950a8da18eaea4e9e85de9444b2980b60ae6eec2722f249df45d317e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@CookerCooking/layout.html.twig", 2);
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
        $__internal_4dbe1e17d52655daf1cbcadf146fb5d15ebd02c2e098879a5e9e1c112b532b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dbe1e17d52655daf1cbcadf146fb5d15ebd02c2e098879a5e9e1c112b532b8b->enter($__internal_4dbe1e17d52655daf1cbcadf146fb5d15ebd02c2e098879a5e9e1c112b532b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dbe1e17d52655daf1cbcadf146fb5d15ebd02c2e098879a5e9e1c112b532b8b->leave($__internal_4dbe1e17d52655daf1cbcadf146fb5d15ebd02c2e098879a5e9e1c112b532b8b_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c270bafa6ee66e265a0f129c7ce57cb5fe77aeb3a5880e20825861211200437b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c270bafa6ee66e265a0f129c7ce57cb5fe77aeb3a5880e20825861211200437b->enter($__internal_c270bafa6ee66e265a0f129c7ce57cb5fe77aeb3a5880e20825861211200437b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    ¿Qué ponemos aquí?
";
        
        $__internal_c270bafa6ee66e265a0f129c7ce57cb5fe77aeb3a5880e20825861211200437b->leave($__internal_c270bafa6ee66e265a0f129c7ce57cb5fe77aeb3a5880e20825861211200437b_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/layout.html.twig";
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
", "@CookerCooking/layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\layout.html.twig");
    }
}

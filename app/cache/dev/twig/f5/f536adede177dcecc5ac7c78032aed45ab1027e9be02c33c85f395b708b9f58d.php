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
        $__internal_d35229b2b8a2a6f27fde3bf64b47df1bcaf7b6f901582db8137de4891174818e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35229b2b8a2a6f27fde3bf64b47df1bcaf7b6f901582db8137de4891174818e->enter($__internal_d35229b2b8a2a6f27fde3bf64b47df1bcaf7b6f901582db8137de4891174818e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d35229b2b8a2a6f27fde3bf64b47df1bcaf7b6f901582db8137de4891174818e->leave($__internal_d35229b2b8a2a6f27fde3bf64b47df1bcaf7b6f901582db8137de4891174818e_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_eb438230438acedff9fad1650f301b15f483c3de6a1f2dc56a9c92425610ae65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb438230438acedff9fad1650f301b15f483c3de6a1f2dc56a9c92425610ae65->enter($__internal_eb438230438acedff9fad1650f301b15f483c3de6a1f2dc56a9c92425610ae65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    ¿Qué ponemos aquí?
";
        
        $__internal_eb438230438acedff9fad1650f301b15f483c3de6a1f2dc56a9c92425610ae65->leave($__internal_eb438230438acedff9fad1650f301b15f483c3de6a1f2dc56a9c92425610ae65_prof);

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
", "CookerCookingBundle::layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/layout.html.twig");
    }
}

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
        $__internal_32325ca2773118a4928d4c2097a1b44a8a0ae90dba12caf2ee442f9e5f1268fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32325ca2773118a4928d4c2097a1b44a8a0ae90dba12caf2ee442f9e5f1268fb->enter($__internal_32325ca2773118a4928d4c2097a1b44a8a0ae90dba12caf2ee442f9e5f1268fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32325ca2773118a4928d4c2097a1b44a8a0ae90dba12caf2ee442f9e5f1268fb->leave($__internal_32325ca2773118a4928d4c2097a1b44a8a0ae90dba12caf2ee442f9e5f1268fb_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_176b46f8931bc09cff6a47556af05f03f9cd43bf9159e68ac8b60a6cce8de649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176b46f8931bc09cff6a47556af05f03f9cd43bf9159e68ac8b60a6cce8de649->enter($__internal_176b46f8931bc09cff6a47556af05f03f9cd43bf9159e68ac8b60a6cce8de649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    ¿Qué ponemos aquí?
";
        
        $__internal_176b46f8931bc09cff6a47556af05f03f9cd43bf9159e68ac8b60a6cce8de649->leave($__internal_176b46f8931bc09cff6a47556af05f03f9cd43bf9159e68ac8b60a6cce8de649_prof);

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

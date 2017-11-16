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
        $__internal_f2c1cc52c5cac6395473ece19c8abc5a611652cb364536c9bad089ab608da8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c1cc52c5cac6395473ece19c8abc5a611652cb364536c9bad089ab608da8a1->enter($__internal_f2c1cc52c5cac6395473ece19c8abc5a611652cb364536c9bad089ab608da8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2c1cc52c5cac6395473ece19c8abc5a611652cb364536c9bad089ab608da8a1->leave($__internal_f2c1cc52c5cac6395473ece19c8abc5a611652cb364536c9bad089ab608da8a1_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9345c789c06cc971eb02209580c903e7d991eccf11e92b61718e021fc2275f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9345c789c06cc971eb02209580c903e7d991eccf11e92b61718e021fc2275f6d->enter($__internal_9345c789c06cc971eb02209580c903e7d991eccf11e92b61718e021fc2275f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    y si..creamos una cooookie¿? 
\tHistorial de búsquedas!!
";
        
        $__internal_9345c789c06cc971eb02209580c903e7d991eccf11e92b61718e021fc2275f6d->leave($__internal_9345c789c06cc971eb02209580c903e7d991eccf11e92b61718e021fc2275f6d_prof);

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
    y si..creamos una cooookie¿? 
\tHistorial de búsquedas!!
{% endblock %}
", "CookerCookingBundle::layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\layout.html.twig");
    }
}

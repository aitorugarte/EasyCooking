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
        $__internal_d86f1fc0500ea52af40e97d577f37dc667e0e7f41f61bc5349630a9f855a8733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86f1fc0500ea52af40e97d577f37dc667e0e7f41f61bc5349630a9f855a8733->enter($__internal_d86f1fc0500ea52af40e97d577f37dc667e0e7f41f61bc5349630a9f855a8733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d86f1fc0500ea52af40e97d577f37dc667e0e7f41f61bc5349630a9f855a8733->leave($__internal_d86f1fc0500ea52af40e97d577f37dc667e0e7f41f61bc5349630a9f855a8733_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_32123e23e708654272f3193734b120e7ba59d39882bb9a3cc914cf521c47f0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32123e23e708654272f3193734b120e7ba59d39882bb9a3cc914cf521c47f0ca->enter($__internal_32123e23e708654272f3193734b120e7ba59d39882bb9a3cc914cf521c47f0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    ¿Qué ponemos aquí?
";
        
        $__internal_32123e23e708654272f3193734b120e7ba59d39882bb9a3cc914cf521c47f0ca->leave($__internal_32123e23e708654272f3193734b120e7ba59d39882bb9a3cc914cf521c47f0ca_prof);

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

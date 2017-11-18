<?php

/* CookerCookingBundle::layout.html.twig */
class __TwigTemplate_b5831288e9d8c1db24e52b5cd7d03431e1801b0e518cfa379d0f8fa396823e34 extends Twig_Template
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
        $__internal_bb03d66f1e33baa61b5a59ab676716be2da86cb55931472da43ab13b785d84e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb03d66f1e33baa61b5a59ab676716be2da86cb55931472da43ab13b785d84e9->enter($__internal_bb03d66f1e33baa61b5a59ab676716be2da86cb55931472da43ab13b785d84e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb03d66f1e33baa61b5a59ab676716be2da86cb55931472da43ab13b785d84e9->leave($__internal_bb03d66f1e33baa61b5a59ab676716be2da86cb55931472da43ab13b785d84e9_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6a41504742e54e332e03e5e05ead0558e22754cb7a220ceefab5b382c8fdf257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a41504742e54e332e03e5e05ead0558e22754cb7a220ceefab5b382c8fdf257->enter($__internal_6a41504742e54e332e03e5e05ead0558e22754cb7a220ceefab5b382c8fdf257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    y si..creamos una cooookie¿? 
\tHistorial de búsquedas!!
";
        
        $__internal_6a41504742e54e332e03e5e05ead0558e22754cb7a220ceefab5b382c8fdf257->leave($__internal_6a41504742e54e332e03e5e05ead0558e22754cb7a220ceefab5b382c8fdf257_prof);

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
", "CookerCookingBundle::layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/layout.html.twig");
    }
}

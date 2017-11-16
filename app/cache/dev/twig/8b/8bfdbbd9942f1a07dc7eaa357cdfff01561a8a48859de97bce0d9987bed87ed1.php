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
        $__internal_84a6d92313b4f1a19941fcaa2705b0d9f1b0d17c9faf702f792c0283d670a7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a6d92313b4f1a19941fcaa2705b0d9f1b0d17c9faf702f792c0283d670a7d1->enter($__internal_84a6d92313b4f1a19941fcaa2705b0d9f1b0d17c9faf702f792c0283d670a7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84a6d92313b4f1a19941fcaa2705b0d9f1b0d17c9faf702f792c0283d670a7d1->leave($__internal_84a6d92313b4f1a19941fcaa2705b0d9f1b0d17c9faf702f792c0283d670a7d1_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7596c15b8025168dbc0b43a7324121f3ab730432e353ebab8fdadee61e6f48e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7596c15b8025168dbc0b43a7324121f3ab730432e353ebab8fdadee61e6f48e1->enter($__internal_7596c15b8025168dbc0b43a7324121f3ab730432e353ebab8fdadee61e6f48e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    ¿Qué ponemos aquí?
";
        
        $__internal_7596c15b8025168dbc0b43a7324121f3ab730432e353ebab8fdadee61e6f48e1->leave($__internal_7596c15b8025168dbc0b43a7324121f3ab730432e353ebab8fdadee61e6f48e1_prof);

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

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
        $__internal_234c4de7b284c6c40f88733553cc8c8dffb16b24cd65090157e31a8c998b1830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234c4de7b284c6c40f88733553cc8c8dffb16b24cd65090157e31a8c998b1830->enter($__internal_234c4de7b284c6c40f88733553cc8c8dffb16b24cd65090157e31a8c998b1830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_234c4de7b284c6c40f88733553cc8c8dffb16b24cd65090157e31a8c998b1830->leave($__internal_234c4de7b284c6c40f88733553cc8c8dffb16b24cd65090157e31a8c998b1830_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ccf3c22538b7dcfc1a57729b9cc0ea01310094e955d498eaf0c12b73cc0c02fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf3c22538b7dcfc1a57729b9cc0ea01310094e955d498eaf0c12b73cc0c02fd->enter($__internal_ccf3c22538b7dcfc1a57729b9cc0ea01310094e955d498eaf0c12b73cc0c02fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    Búsqueda avanzada:
\t<form class=\"search\">

\t<input type=\"search\" name=\"Search\" id=\"search\" placeholder=\"Introduzca texto\">
\t<input type=\"button\" value=\"Buscar\">

\t</form>
";
        
        $__internal_ccf3c22538b7dcfc1a57729b9cc0ea01310094e955d498eaf0c12b73cc0c02fd->leave($__internal_ccf3c22538b7dcfc1a57729b9cc0ea01310094e955d498eaf0c12b73cc0c02fd_prof);

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
    Búsqueda avanzada:
\t<form class=\"search\">

\t<input type=\"search\" name=\"Search\" id=\"search\" placeholder=\"Introduzca texto\">
\t<input type=\"button\" value=\"Buscar\">

\t</form>
{% endblock %}
", "CookerCookingBundle::layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/layout.html.twig");
    }
}

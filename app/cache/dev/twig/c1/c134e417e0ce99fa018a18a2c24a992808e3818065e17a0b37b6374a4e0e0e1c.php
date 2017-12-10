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
        $__internal_31674dda826b167308afa707c30b63e963d6f0ab05822ae9e08cb0bfaef76aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31674dda826b167308afa707c30b63e963d6f0ab05822ae9e08cb0bfaef76aa6->enter($__internal_31674dda826b167308afa707c30b63e963d6f0ab05822ae9e08cb0bfaef76aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31674dda826b167308afa707c30b63e963d6f0ab05822ae9e08cb0bfaef76aa6->leave($__internal_31674dda826b167308afa707c30b63e963d6f0ab05822ae9e08cb0bfaef76aa6_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_286cdbc0341fcdc8882f6e18363d1c912351562867b7c9ac8cbad9603068c3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_286cdbc0341fcdc8882f6e18363d1c912351562867b7c9ac8cbad9603068c3a8->enter($__internal_286cdbc0341fcdc8882f6e18363d1c912351562867b7c9ac8cbad9603068c3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    B&uacutesqueda avanzada:
\t<form class=\"search\">

\t<input type=\"search\" name=\"Search\" id=\"search\" placeholder=\"Introduzca texto\">
\t<input type=\"button\" value=\"Buscar\">

\t</form>

\t<ul id=\"redes\">
\t\t<li><a href=\"https://twitter.com/\" target=\"_blank\">Twitter</a></li>
\t\t<li><a href=\"https://www.instagram.com/\" target=\"_blank\">Instagram</a></li>
\t\t<li><a href=\"https://www.facebook.com/\" target=\"_blank\">Facebook</a></li>
\t</ul>

";
        
        $__internal_286cdbc0341fcdc8882f6e18363d1c912351562867b7c9ac8cbad9603068c3a8->leave($__internal_286cdbc0341fcdc8882f6e18363d1c912351562867b7c9ac8cbad9603068c3a8_prof);

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
    B&uacutesqueda avanzada:
\t<form class=\"search\">

\t<input type=\"search\" name=\"Search\" id=\"search\" placeholder=\"Introduzca texto\">
\t<input type=\"button\" value=\"Buscar\">

\t</form>

\t<ul id=\"redes\">
\t\t<li><a href=\"https://twitter.com/\" target=\"_blank\">Twitter</a></li>
\t\t<li><a href=\"https://www.instagram.com/\" target=\"_blank\">Instagram</a></li>
\t\t<li><a href=\"https://www.facebook.com/\" target=\"_blank\">Facebook</a></li>
\t</ul>

{% endblock %}
", "CookerCookingBundle::layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/layout.html.twig");
    }
}

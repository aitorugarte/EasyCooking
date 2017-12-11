<?php

/* @CookerCooking/layout.html.twig */
class __TwigTemplate_55465e5fa8f2b9985c49a06da841398026a395ef537d12eb1ef7a4f2482af262 extends Twig_Template
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
        $__internal_1a09a1d574db70d8d7082842fb62767f1a92956b47af134344c1fcf03014c399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a09a1d574db70d8d7082842fb62767f1a92956b47af134344c1fcf03014c399->enter($__internal_1a09a1d574db70d8d7082842fb62767f1a92956b47af134344c1fcf03014c399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a09a1d574db70d8d7082842fb62767f1a92956b47af134344c1fcf03014c399->leave($__internal_1a09a1d574db70d8d7082842fb62767f1a92956b47af134344c1fcf03014c399_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9e2466bf9b6ca03473c41db46f34129514a55e6535a5d4eb50ea0864264711d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e2466bf9b6ca03473c41db46f34129514a55e6535a5d4eb50ea0864264711d8->enter($__internal_9e2466bf9b6ca03473c41db46f34129514a55e6535a5d4eb50ea0864264711d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_9e2466bf9b6ca03473c41db46f34129514a55e6535a5d4eb50ea0864264711d8->leave($__internal_9e2466bf9b6ca03473c41db46f34129514a55e6535a5d4eb50ea0864264711d8_prof);

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
", "@CookerCooking/layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\layout.html.twig");
    }
}

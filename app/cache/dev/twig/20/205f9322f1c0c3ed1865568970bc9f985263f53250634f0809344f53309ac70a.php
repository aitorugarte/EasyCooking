<?php

/* @CookerCooking/sidebar.html.twig */
class __TwigTemplate_54d845a8c65c60b59e6a8d7ef79ea7d42251487d24ab23f546a01f6b7c211e09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@CookerCooking/sidebar.html.twig", 2);
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
        $__internal_abde54d21d1cf012f77071f0bed24891108c7dfba4ecbda4fc43816609931d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abde54d21d1cf012f77071f0bed24891108c7dfba4ecbda4fc43816609931d25->enter($__internal_abde54d21d1cf012f77071f0bed24891108c7dfba4ecbda4fc43816609931d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/sidebar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abde54d21d1cf012f77071f0bed24891108c7dfba4ecbda4fc43816609931d25->leave($__internal_abde54d21d1cf012f77071f0bed24891108c7dfba4ecbda4fc43816609931d25_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fc47098b0fc7a1211788f64de9a49f2b92b143f3095b9ea75ecfc15d3733a5b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc47098b0fc7a1211788f64de9a49f2b92b143f3095b9ea75ecfc15d3733a5b8->enter($__internal_fc47098b0fc7a1211788f64de9a49f2b92b143f3095b9ea75ecfc15d3733a5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "
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

";
        
        $__internal_fc47098b0fc7a1211788f64de9a49f2b92b143f3095b9ea75ecfc15d3733a5b8->leave($__internal_fc47098b0fc7a1211788f64de9a49f2b92b143f3095b9ea75ecfc15d3733a5b8_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/sidebar.html.twig";
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
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/sidebar.html.twig #}
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
", "@CookerCooking/sidebar.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\sidebar.html.twig");
    }
}

<?php

/* CookerCookingBundle::sidebar.html.twig */
class __TwigTemplate_15bfd298ae9b5284d349120deee51724b2ba021fdd0eabef6476e8bd7d95cb88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "CookerCookingBundle::sidebar.html.twig", 2);
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
        $__internal_3faace1a19e0069604cf1a99e25248d0dcdb5b3412a29606a631297b18315ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3faace1a19e0069604cf1a99e25248d0dcdb5b3412a29606a631297b18315ce7->enter($__internal_3faace1a19e0069604cf1a99e25248d0dcdb5b3412a29606a631297b18315ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::sidebar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3faace1a19e0069604cf1a99e25248d0dcdb5b3412a29606a631297b18315ce7->leave($__internal_3faace1a19e0069604cf1a99e25248d0dcdb5b3412a29606a631297b18315ce7_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_725428d4a3423439f84a53bfacf368f7308858391f6f5287867a183e0253fb46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725428d4a3423439f84a53bfacf368f7308858391f6f5287867a183e0253fb46->enter($__internal_725428d4a3423439f84a53bfacf368f7308858391f6f5287867a183e0253fb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "
   ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("B&uacutesqueda avanzada:", array(), "messages");
        // line 7
        echo "\t<form class=\"search\">

\t<input type=\"search\" name=\"Search\" id=\"search\" placeholder=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Introduzca texto", array(), "messages");
        echo "\">
\t<input type=\"button\" value=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Buscar", array(), "messages");
        echo "\">

\t</form>

\t<ul id=\"redes\">
\t\t<li><a href=\"https://twitter.com/\" target=\"_blank\">Twitter</a></li>
\t\t<li><a href=\"https://www.instagram.com/\" target=\"_blank\">Instagram</a></li>
\t\t<li><a href=\"https://www.facebook.com/\" target=\"_blank\">Facebook</a></li>
\t</ul>

";
        
        $__internal_725428d4a3423439f84a53bfacf368f7308858391f6f5287867a183e0253fb46->leave($__internal_725428d4a3423439f84a53bfacf368f7308858391f6f5287867a183e0253fb46_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle::sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  49 => 9,  45 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
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

   {% trans %} B&uacutesqueda avanzada:{% endtrans %}
\t<form class=\"search\">

\t<input type=\"search\" name=\"Search\" id=\"search\" placeholder=\"{% trans %}Introduzca texto{% endtrans %}\">
\t<input type=\"button\" value=\"{% trans %}Buscar{% endtrans %}\">

\t</form>

\t<ul id=\"redes\">
\t\t<li><a href=\"https://twitter.com/\" target=\"_blank\">Twitter</a></li>
\t\t<li><a href=\"https://www.instagram.com/\" target=\"_blank\">Instagram</a></li>
\t\t<li><a href=\"https://www.facebook.com/\" target=\"_blank\">Facebook</a></li>
\t</ul>

{% endblock %}
", "CookerCookingBundle::sidebar.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\sidebar.html.twig");
    }
}

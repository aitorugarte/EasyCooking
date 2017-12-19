<?php

/* CookerCookingBundle::sidebar.html.twig */
class __TwigTemplate_f4694db86a72d91470ebc77d9da221d108312a58e4e1ad342fc93737cb8d9577 extends Twig_Template
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
        $__internal_c930b116422e88344cc5f2d7192d0a14b03cd9cac1831d1148cbb3ab98dc283d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c930b116422e88344cc5f2d7192d0a14b03cd9cac1831d1148cbb3ab98dc283d->enter($__internal_c930b116422e88344cc5f2d7192d0a14b03cd9cac1831d1148cbb3ab98dc283d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::sidebar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c930b116422e88344cc5f2d7192d0a14b03cd9cac1831d1148cbb3ab98dc283d->leave($__internal_c930b116422e88344cc5f2d7192d0a14b03cd9cac1831d1148cbb3ab98dc283d_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6b6d83b00008e51ba69a07bd09d6aa4db655fdb3f5e5ae1106ffb96e0de11dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6d83b00008e51ba69a07bd09d6aa4db655fdb3f5e5ae1106ffb96e0de11dc7->enter($__internal_6b6d83b00008e51ba69a07bd09d6aa4db655fdb3f5e5ae1106ffb96e0de11dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "
   ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("B&uacute;squeda avanzada:", array(), "messages");
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
        
        $__internal_6b6d83b00008e51ba69a07bd09d6aa4db655fdb3f5e5ae1106ffb96e0de11dc7->leave($__internal_6b6d83b00008e51ba69a07bd09d6aa4db655fdb3f5e5ae1106ffb96e0de11dc7_prof);

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

   {% trans %} B&uacute;squeda avanzada:{% endtrans %}
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
", "CookerCookingBundle::sidebar.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/sidebar.html.twig");
    }
}

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
        $__internal_9c3457705fe67c4f37cb40232c3d5dbacb1f4dc85c44c4306ec8269e73434deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3457705fe67c4f37cb40232c3d5dbacb1f4dc85c44c4306ec8269e73434deb->enter($__internal_9c3457705fe67c4f37cb40232c3d5dbacb1f4dc85c44c4306ec8269e73434deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c3457705fe67c4f37cb40232c3d5dbacb1f4dc85c44c4306ec8269e73434deb->leave($__internal_9c3457705fe67c4f37cb40232c3d5dbacb1f4dc85c44c4306ec8269e73434deb_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_cf1886f016c8f12bc87a6aa9e05163a68e393c52da696dbb301663272d5ebcd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1886f016c8f12bc87a6aa9e05163a68e393c52da696dbb301663272d5ebcd0->enter($__internal_cf1886f016c8f12bc87a6aa9e05163a68e393c52da696dbb301663272d5ebcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_cf1886f016c8f12bc87a6aa9e05163a68e393c52da696dbb301663272d5ebcd0->leave($__internal_cf1886f016c8f12bc87a6aa9e05163a68e393c52da696dbb301663272d5ebcd0_prof);

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

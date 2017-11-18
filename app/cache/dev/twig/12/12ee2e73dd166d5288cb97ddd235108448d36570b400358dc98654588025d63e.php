<?php

/* CookerCookingBundle:Cook:contact.html.twig */
class __TwigTemplate_b6e9d0bc5b0e824443f80f92d94d6adc7272b044d81f7d6b48cbc198092d6cc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:contact.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CookerCookingBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae97f6bd9dbb22a5cbef3abce773cfd9ffd5e0b366a53ec186ed1f067d518c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae97f6bd9dbb22a5cbef3abce773cfd9ffd5e0b366a53ec186ed1f067d518c56->enter($__internal_ae97f6bd9dbb22a5cbef3abce773cfd9ffd5e0b366a53ec186ed1f067d518c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae97f6bd9dbb22a5cbef3abce773cfd9ffd5e0b366a53ec186ed1f067d518c56->leave($__internal_ae97f6bd9dbb22a5cbef3abce773cfd9ffd5e0b366a53ec186ed1f067d518c56_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_815ac9f24a27b5fbc2b4adc19e3f58a263207970241ce741db5210bec07309ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815ac9f24a27b5fbc2b4adc19e3f58a263207970241ce741db5210bec07309ad->enter($__internal_815ac9f24a27b5fbc2b4adc19e3f58a263207970241ce741db5210bec07309ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_815ac9f24a27b5fbc2b4adc19e3f58a263207970241ce741db5210bec07309ad->leave($__internal_815ac9f24a27b5fbc2b4adc19e3f58a263207970241ce741db5210bec07309ad_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_354071c682416d0a7319419051c1659c382f610d8d49c2b86c9b7ba7185d0d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354071c682416d0a7319419051c1659c382f610d8d49c2b86c9b7ba7185d0d96->enter($__internal_354071c682416d0a7319419051c1659c382f610d8d49c2b86c9b7ba7185d0d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contacta conmigo</h1>
    </header>

    <p>Puedes encontrarme en las siguientes redes sociales:</p>
\t<ul>
\t\t<li><a href=\"https://twitter.com/claorden\" target=\"_blank\">Twitter</a></li>
\t\t<li><a href=\"https://www.linkedin.com/in/claorden\" target=\"_blank\">LinkedIn</a></li>
\t</ul>
";
        
        $__internal_354071c682416d0a7319419051c1659c382f610d8d49c2b86c9b7ba7185d0d96->leave($__internal_354071c682416d0a7319419051c1659c382f610d8d49c2b86c9b7ba7185d0d96_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Blog/contact.html.twig #}
{% extends 'CookerCookingBundle::layout.html.twig' %}

{% block title %}Contacto{% endblock%}

{% block body %}
    <header>
        <h1>Contacta conmigo</h1>
    </header>

    <p>Puedes encontrarme en las siguientes redes sociales:</p>
\t<ul>
\t\t<li><a href=\"https://twitter.com/claorden\" target=\"_blank\">Twitter</a></li>
\t\t<li><a href=\"https://www.linkedin.com/in/claorden\" target=\"_blank\">LinkedIn</a></li>
\t</ul>
{% endblock %}
", "CookerCookingBundle:Cook:contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/contact.html.twig");
    }
}

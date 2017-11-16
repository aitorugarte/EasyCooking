<?php

/* CookerCookingBundle:Cook:contact.html.twig */
class __TwigTemplate_20c18613f10023f68ffa221d9ff30782ad8299460dced7466528c3dbf55915a7 extends Twig_Template
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
        $__internal_fbc4b21cbed2732998e6b3b872f7c45d8c8e6857d91e35ef7261aa6c304f4ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc4b21cbed2732998e6b3b872f7c45d8c8e6857d91e35ef7261aa6c304f4ab3->enter($__internal_fbc4b21cbed2732998e6b3b872f7c45d8c8e6857d91e35ef7261aa6c304f4ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbc4b21cbed2732998e6b3b872f7c45d8c8e6857d91e35ef7261aa6c304f4ab3->leave($__internal_fbc4b21cbed2732998e6b3b872f7c45d8c8e6857d91e35ef7261aa6c304f4ab3_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c78d2e8be9e0a7f7becd4cb20d4b1d0e2e7cb5a2d72651185c8ffb7cb61de1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78d2e8be9e0a7f7becd4cb20d4b1d0e2e7cb5a2d72651185c8ffb7cb61de1e6->enter($__internal_c78d2e8be9e0a7f7becd4cb20d4b1d0e2e7cb5a2d72651185c8ffb7cb61de1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_c78d2e8be9e0a7f7becd4cb20d4b1d0e2e7cb5a2d72651185c8ffb7cb61de1e6->leave($__internal_c78d2e8be9e0a7f7becd4cb20d4b1d0e2e7cb5a2d72651185c8ffb7cb61de1e6_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_564353ce3076945c6415678f4996e70ef0978a79879cd3bf178346f20f6c66a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_564353ce3076945c6415678f4996e70ef0978a79879cd3bf178346f20f6c66a4->enter($__internal_564353ce3076945c6415678f4996e70ef0978a79879cd3bf178346f20f6c66a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_564353ce3076945c6415678f4996e70ef0978a79879cd3bf178346f20f6c66a4->leave($__internal_564353ce3076945c6415678f4996e70ef0978a79879cd3bf178346f20f6c66a4_prof);

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

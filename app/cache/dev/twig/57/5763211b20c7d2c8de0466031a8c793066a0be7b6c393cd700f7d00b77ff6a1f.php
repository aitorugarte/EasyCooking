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
        $__internal_9623211c3b21719c496cf640a4dd43bf803fce6634cd45c41221234f7f990d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9623211c3b21719c496cf640a4dd43bf803fce6634cd45c41221234f7f990d98->enter($__internal_9623211c3b21719c496cf640a4dd43bf803fce6634cd45c41221234f7f990d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9623211c3b21719c496cf640a4dd43bf803fce6634cd45c41221234f7f990d98->leave($__internal_9623211c3b21719c496cf640a4dd43bf803fce6634cd45c41221234f7f990d98_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2d381682e21565d3ab72b7caea6c033d8a30d9945ec255d0e3bcdd778bc6a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d381682e21565d3ab72b7caea6c033d8a30d9945ec255d0e3bcdd778bc6a96->enter($__internal_f2d381682e21565d3ab72b7caea6c033d8a30d9945ec255d0e3bcdd778bc6a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_f2d381682e21565d3ab72b7caea6c033d8a30d9945ec255d0e3bcdd778bc6a96->leave($__internal_f2d381682e21565d3ab72b7caea6c033d8a30d9945ec255d0e3bcdd778bc6a96_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c7c6a9cb8ff19ffea26f9a26afb607aa47b3ad039bf0ee2f6f1507cf4a2a368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7c6a9cb8ff19ffea26f9a26afb607aa47b3ad039bf0ee2f6f1507cf4a2a368->enter($__internal_6c7c6a9cb8ff19ffea26f9a26afb607aa47b3ad039bf0ee2f6f1507cf4a2a368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6c7c6a9cb8ff19ffea26f9a26afb607aa47b3ad039bf0ee2f6f1507cf4a2a368->leave($__internal_6c7c6a9cb8ff19ffea26f9a26afb607aa47b3ad039bf0ee2f6f1507cf4a2a368_prof);

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
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/contact.html.twig #}
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

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
        $__internal_0d2da1bc8a50fa604eb750f931d31c4e9c14e991703b383285f11d7146aa4dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2da1bc8a50fa604eb750f931d31c4e9c14e991703b383285f11d7146aa4dd9->enter($__internal_0d2da1bc8a50fa604eb750f931d31c4e9c14e991703b383285f11d7146aa4dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d2da1bc8a50fa604eb750f931d31c4e9c14e991703b383285f11d7146aa4dd9->leave($__internal_0d2da1bc8a50fa604eb750f931d31c4e9c14e991703b383285f11d7146aa4dd9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_51bff3648e9cfb7a6515685878d26f556dea8e37d41edd3b246e0adabdf68a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bff3648e9cfb7a6515685878d26f556dea8e37d41edd3b246e0adabdf68a80->enter($__internal_51bff3648e9cfb7a6515685878d26f556dea8e37d41edd3b246e0adabdf68a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_51bff3648e9cfb7a6515685878d26f556dea8e37d41edd3b246e0adabdf68a80->leave($__internal_51bff3648e9cfb7a6515685878d26f556dea8e37d41edd3b246e0adabdf68a80_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3f1463c2bc2effdefb9e26c50d837374ebe30c937538a29ad56b3aafb19caa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f1463c2bc2effdefb9e26c50d837374ebe30c937538a29ad56b3aafb19caa3->enter($__internal_a3f1463c2bc2effdefb9e26c50d837374ebe30c937538a29ad56b3aafb19caa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a3f1463c2bc2effdefb9e26c50d837374ebe30c937538a29ad56b3aafb19caa3->leave($__internal_a3f1463c2bc2effdefb9e26c50d837374ebe30c937538a29ad56b3aafb19caa3_prof);

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

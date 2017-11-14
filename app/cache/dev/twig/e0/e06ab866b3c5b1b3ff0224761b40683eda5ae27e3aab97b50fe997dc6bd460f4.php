<?php

/* @CookerCooking/Cook/contact.html.twig */
class __TwigTemplate_4bfdccc46de16217454c02f6e4c6e36eba145c28f80b68648a4eb8f6efd7a195 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Cook/contact.html.twig", 2);
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
        $__internal_73656ffb19c10ebc7e450a115c6679f1463ba112ef68d1610b8efa84d0ef2de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73656ffb19c10ebc7e450a115c6679f1463ba112ef68d1610b8efa84d0ef2de6->enter($__internal_73656ffb19c10ebc7e450a115c6679f1463ba112ef68d1610b8efa84d0ef2de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73656ffb19c10ebc7e450a115c6679f1463ba112ef68d1610b8efa84d0ef2de6->leave($__internal_73656ffb19c10ebc7e450a115c6679f1463ba112ef68d1610b8efa84d0ef2de6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_63531a13ce4c1cd7a629c680ba575031ae478b2a3a214032a652a0a801584b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63531a13ce4c1cd7a629c680ba575031ae478b2a3a214032a652a0a801584b46->enter($__internal_63531a13ce4c1cd7a629c680ba575031ae478b2a3a214032a652a0a801584b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_63531a13ce4c1cd7a629c680ba575031ae478b2a3a214032a652a0a801584b46->leave($__internal_63531a13ce4c1cd7a629c680ba575031ae478b2a3a214032a652a0a801584b46_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_602f8a6e35aab84f60c74581a1b7e420c779ecbb669cf470278481c9264170aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602f8a6e35aab84f60c74581a1b7e420c779ecbb669cf470278481c9264170aa->enter($__internal_602f8a6e35aab84f60c74581a1b7e420c779ecbb669cf470278481c9264170aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_602f8a6e35aab84f60c74581a1b7e420c779ecbb669cf470278481c9264170aa->leave($__internal_602f8a6e35aab84f60c74581a1b7e420c779ecbb669cf470278481c9264170aa_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Cook/contact.html.twig";
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
", "@CookerCooking/Cook/contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\contact.html.twig");
    }
}

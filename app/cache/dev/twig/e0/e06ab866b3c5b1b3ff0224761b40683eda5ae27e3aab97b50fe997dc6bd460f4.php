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
        $__internal_243a0e6068aca7edb6ac7e1e3f84ab92c87e242b32c6237bad343274468bdbd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243a0e6068aca7edb6ac7e1e3f84ab92c87e242b32c6237bad343274468bdbd4->enter($__internal_243a0e6068aca7edb6ac7e1e3f84ab92c87e242b32c6237bad343274468bdbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_243a0e6068aca7edb6ac7e1e3f84ab92c87e242b32c6237bad343274468bdbd4->leave($__internal_243a0e6068aca7edb6ac7e1e3f84ab92c87e242b32c6237bad343274468bdbd4_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8da46cd9659c4104873169136aaff0f247e7db3d3b7f2d2b1071d518f116aa2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da46cd9659c4104873169136aaff0f247e7db3d3b7f2d2b1071d518f116aa2d->enter($__internal_8da46cd9659c4104873169136aaff0f247e7db3d3b7f2d2b1071d518f116aa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_8da46cd9659c4104873169136aaff0f247e7db3d3b7f2d2b1071d518f116aa2d->leave($__internal_8da46cd9659c4104873169136aaff0f247e7db3d3b7f2d2b1071d518f116aa2d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_06a6fba538a32563868627ef4eb1aeab998a2dcdf8b258e496d47f5599d96f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a6fba538a32563868627ef4eb1aeab998a2dcdf8b258e496d47f5599d96f53->enter($__internal_06a6fba538a32563868627ef4eb1aeab998a2dcdf8b258e496d47f5599d96f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_06a6fba538a32563868627ef4eb1aeab998a2dcdf8b258e496d47f5599d96f53->leave($__internal_06a6fba538a32563868627ef4eb1aeab998a2dcdf8b258e496d47f5599d96f53_prof);

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
", "@CookerCooking/Cook/contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\contact.html.twig");
    }
}

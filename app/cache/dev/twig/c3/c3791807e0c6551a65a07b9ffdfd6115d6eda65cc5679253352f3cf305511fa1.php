<?php

/* CookerCookingBundle:Cook:contact.html.twig */
class __TwigTemplate_80339b1f6fbdb67d2872c9065d5518b8effff12df24fd3013a54e446fdc6cf72 extends Twig_Template
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
        $__internal_7240ec30fa9f6eaf87a8ab014161aaf85f51326b16bd4efc7baf74d0214e7013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7240ec30fa9f6eaf87a8ab014161aaf85f51326b16bd4efc7baf74d0214e7013->enter($__internal_7240ec30fa9f6eaf87a8ab014161aaf85f51326b16bd4efc7baf74d0214e7013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7240ec30fa9f6eaf87a8ab014161aaf85f51326b16bd4efc7baf74d0214e7013->leave($__internal_7240ec30fa9f6eaf87a8ab014161aaf85f51326b16bd4efc7baf74d0214e7013_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f2114d6383aac62023982a65b0f301736497fc71c53174accf533ce84d8454e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2114d6383aac62023982a65b0f301736497fc71c53174accf533ce84d8454e->enter($__internal_9f2114d6383aac62023982a65b0f301736497fc71c53174accf533ce84d8454e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_9f2114d6383aac62023982a65b0f301736497fc71c53174accf533ce84d8454e->leave($__internal_9f2114d6383aac62023982a65b0f301736497fc71c53174accf533ce84d8454e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_bafcd30ce5bf515b9a395ac6a63c77d145b98f50ad07b3052d72319aaa4d1890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bafcd30ce5bf515b9a395ac6a63c77d145b98f50ad07b3052d72319aaa4d1890->enter($__internal_bafcd30ce5bf515b9a395ac6a63c77d145b98f50ad07b3052d72319aaa4d1890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contacta conmigo</h1>
    </header>

<form action=\"mailto:aitorugarte@opendeusto.es\" method=\"post\">
  <fieldset>
    <h4>Nombre</h4>
    <input type=\"text\" name=\"nombre\">
    
   <h4>Correo</h4>
    <input type=\"text\" name=\"correo\">
  
    <h4>Mensaje</h4>
    <input type=\"text\" name=\"mensaje\" size=\"50\" style=\"height:50px\">
  </fieldset>

     <div class=\"button\">
        <button type=\"submit\" value=\"Send\">Enviar</button>
    </div>
   
</form>
";
        
        $__internal_bafcd30ce5bf515b9a395ac6a63c77d145b98f50ad07b3052d72319aaa4d1890->leave($__internal_bafcd30ce5bf515b9a395ac6a63c77d145b98f50ad07b3052d72319aaa4d1890_prof);

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

<form action=\"mailto:aitorugarte@opendeusto.es\" method=\"post\">
  <fieldset>
    <h4>Nombre</h4>
    <input type=\"text\" name=\"nombre\">
    
   <h4>Correo</h4>
    <input type=\"text\" name=\"correo\">
  
    <h4>Mensaje</h4>
    <input type=\"text\" name=\"mensaje\" size=\"50\" style=\"height:50px\">
  </fieldset>

     <div class=\"button\">
        <button type=\"submit\" value=\"Send\">Enviar</button>
    </div>
   
</form>
{% endblock %}
", "CookerCookingBundle:Cook:contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/contact.html.twig");
    }
}

<?php

/* CookerCookingBundle:Cook:contact.html.twig */
class __TwigTemplate_80339b1f6fbdb67d2872c9065d5518b8effff12df24fd3013a54e446fdc6cf72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::sidebar.html.twig", "CookerCookingBundle:Cook:contact.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CookerCookingBundle::sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71412340858b2db1c69f482600d788e4ee6cd68574dd31eebe150e0a94a1fca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71412340858b2db1c69f482600d788e4ee6cd68574dd31eebe150e0a94a1fca5->enter($__internal_71412340858b2db1c69f482600d788e4ee6cd68574dd31eebe150e0a94a1fca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71412340858b2db1c69f482600d788e4ee6cd68574dd31eebe150e0a94a1fca5->leave($__internal_71412340858b2db1c69f482600d788e4ee6cd68574dd31eebe150e0a94a1fca5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_623c2ed8233e538288c9e4147861bd1f7fd95f2dcf59f3c4bf74da007d30509d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623c2ed8233e538288c9e4147861bd1f7fd95f2dcf59f3c4bf74da007d30509d->enter($__internal_623c2ed8233e538288c9e4147861bd1f7fd95f2dcf59f3c4bf74da007d30509d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_623c2ed8233e538288c9e4147861bd1f7fd95f2dcf59f3c4bf74da007d30509d->leave($__internal_623c2ed8233e538288c9e4147861bd1f7fd95f2dcf59f3c4bf74da007d30509d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd043f5d9dca190eebd86ed890206a9c4f2d8b47610c3947e80ecc19b2b917ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd043f5d9dca190eebd86ed890206a9c4f2d8b47610c3947e80ecc19b2b917ed->enter($__internal_bd043f5d9dca190eebd86ed890206a9c4f2d8b47610c3947e80ecc19b2b917ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contacta conmigo</h1>
    </header>

<form action=\"mailto:aitorugarte@opendeusto.es\" method=\"post\" enctype=\"text/plain\">
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
        
        $__internal_bd043f5d9dca190eebd86ed890206a9c4f2d8b47610c3947e80ecc19b2b917ed->leave($__internal_bd043f5d9dca190eebd86ed890206a9c4f2d8b47610c3947e80ecc19b2b917ed_prof);

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
{% extends 'CookerCookingBundle::sidebar.html.twig' %}

{% block title %}Contacto{% endblock%}

{% block body %}
    <header>
        <h1>Contacta conmigo</h1>
    </header>

<form action=\"mailto:aitorugarte@opendeusto.es\" method=\"post\" enctype=\"text/plain\">
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

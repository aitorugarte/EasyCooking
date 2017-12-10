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
        $__internal_5aa26fc9827c44dc86a6eb081f3575af0b00da90e70b28d1dbcfaa294c047a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa26fc9827c44dc86a6eb081f3575af0b00da90e70b28d1dbcfaa294c047a20->enter($__internal_5aa26fc9827c44dc86a6eb081f3575af0b00da90e70b28d1dbcfaa294c047a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aa26fc9827c44dc86a6eb081f3575af0b00da90e70b28d1dbcfaa294c047a20->leave($__internal_5aa26fc9827c44dc86a6eb081f3575af0b00da90e70b28d1dbcfaa294c047a20_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d75d1406f269685dee61719ffde01d6dad6d36caf593e30902cc641a9efef3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75d1406f269685dee61719ffde01d6dad6d36caf593e30902cc641a9efef3bc->enter($__internal_d75d1406f269685dee61719ffde01d6dad6d36caf593e30902cc641a9efef3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_d75d1406f269685dee61719ffde01d6dad6d36caf593e30902cc641a9efef3bc->leave($__internal_d75d1406f269685dee61719ffde01d6dad6d36caf593e30902cc641a9efef3bc_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_25c4ba3fa8f30912e46782bf1f83dccd1db8365766ad7557169b67d26fe36a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c4ba3fa8f30912e46782bf1f83dccd1db8365766ad7557169b67d26fe36a53->enter($__internal_25c4ba3fa8f30912e46782bf1f83dccd1db8365766ad7557169b67d26fe36a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_25c4ba3fa8f30912e46782bf1f83dccd1db8365766ad7557169b67d26fe36a53->leave($__internal_25c4ba3fa8f30912e46782bf1f83dccd1db8365766ad7557169b67d26fe36a53_prof);

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

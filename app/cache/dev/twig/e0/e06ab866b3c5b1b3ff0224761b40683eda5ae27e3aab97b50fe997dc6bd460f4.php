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
        $__internal_0431e264bbc45824411d04fbd38ab334f5243c1d6c116a561b2e28919ad3fc14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0431e264bbc45824411d04fbd38ab334f5243c1d6c116a561b2e28919ad3fc14->enter($__internal_0431e264bbc45824411d04fbd38ab334f5243c1d6c116a561b2e28919ad3fc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0431e264bbc45824411d04fbd38ab334f5243c1d6c116a561b2e28919ad3fc14->leave($__internal_0431e264bbc45824411d04fbd38ab334f5243c1d6c116a561b2e28919ad3fc14_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a26be88893e3c7442124ed66a19ca45ae0d089c6c21873b2dbbfa87acd2401b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a26be88893e3c7442124ed66a19ca45ae0d089c6c21873b2dbbfa87acd2401b->enter($__internal_3a26be88893e3c7442124ed66a19ca45ae0d089c6c21873b2dbbfa87acd2401b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_3a26be88893e3c7442124ed66a19ca45ae0d089c6c21873b2dbbfa87acd2401b->leave($__internal_3a26be88893e3c7442124ed66a19ca45ae0d089c6c21873b2dbbfa87acd2401b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e811ac9ce941f85091e354e1e18d6bdf64e5b120a3b08207a6c305f7b5cc4d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e811ac9ce941f85091e354e1e18d6bdf64e5b120a3b08207a6c305f7b5cc4d20->enter($__internal_e811ac9ce941f85091e354e1e18d6bdf64e5b120a3b08207a6c305f7b5cc4d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e811ac9ce941f85091e354e1e18d6bdf64e5b120a3b08207a6c305f7b5cc4d20->leave($__internal_e811ac9ce941f85091e354e1e18d6bdf64e5b120a3b08207a6c305f7b5cc4d20_prof);

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
", "@CookerCooking/Cook/contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\contact.html.twig");
    }
}

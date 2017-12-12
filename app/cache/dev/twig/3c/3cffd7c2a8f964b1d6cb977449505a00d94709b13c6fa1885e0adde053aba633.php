<?php

/* @CookerCooking/Cook/contact.html.twig */
class __TwigTemplate_937b184a43efe8ccb3dd11f3be290970fd147ef81dcf15e3cd861664b2cfeb4c extends Twig_Template
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
        $__internal_80d44fe282cc2cdcaa2ae45fafe64699fc35b17e10e7046949f3c226fac620f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d44fe282cc2cdcaa2ae45fafe64699fc35b17e10e7046949f3c226fac620f5->enter($__internal_80d44fe282cc2cdcaa2ae45fafe64699fc35b17e10e7046949f3c226fac620f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80d44fe282cc2cdcaa2ae45fafe64699fc35b17e10e7046949f3c226fac620f5->leave($__internal_80d44fe282cc2cdcaa2ae45fafe64699fc35b17e10e7046949f3c226fac620f5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_41b1a53bc133bebd9c6afa682a9489ece33e34abb8c3294bc94e72c5c68219f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b1a53bc133bebd9c6afa682a9489ece33e34abb8c3294bc94e72c5c68219f7->enter($__internal_41b1a53bc133bebd9c6afa682a9489ece33e34abb8c3294bc94e72c5c68219f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_41b1a53bc133bebd9c6afa682a9489ece33e34abb8c3294bc94e72c5c68219f7->leave($__internal_41b1a53bc133bebd9c6afa682a9489ece33e34abb8c3294bc94e72c5c68219f7_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5ca693402569d05b99deedc4c8021c0f9a569cca344fad6227ab7a2bf312485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ca693402569d05b99deedc4c8021c0f9a569cca344fad6227ab7a2bf312485->enter($__internal_a5ca693402569d05b99deedc4c8021c0f9a569cca344fad6227ab7a2bf312485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a5ca693402569d05b99deedc4c8021c0f9a569cca344fad6227ab7a2bf312485->leave($__internal_a5ca693402569d05b99deedc4c8021c0f9a569cca344fad6227ab7a2bf312485_prof);

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

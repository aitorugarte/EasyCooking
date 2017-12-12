<?php

/* @CookerCooking/Cook/contact.html.twig */
class __TwigTemplate_937b184a43efe8ccb3dd11f3be290970fd147ef81dcf15e3cd861664b2cfeb4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::sidebar.html.twig", "@CookerCooking/Cook/contact.html.twig", 2);
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
        $__internal_6809e2cc2e97b78b178f7ef51c36bd8cb2c51bc4e7bb1871b5618a289f5e3faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6809e2cc2e97b78b178f7ef51c36bd8cb2c51bc4e7bb1871b5618a289f5e3faf->enter($__internal_6809e2cc2e97b78b178f7ef51c36bd8cb2c51bc4e7bb1871b5618a289f5e3faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6809e2cc2e97b78b178f7ef51c36bd8cb2c51bc4e7bb1871b5618a289f5e3faf->leave($__internal_6809e2cc2e97b78b178f7ef51c36bd8cb2c51bc4e7bb1871b5618a289f5e3faf_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5b40972c0a021d8bf750cdadf7e05c944aa182ec33012c02d2a83e644641a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b40972c0a021d8bf750cdadf7e05c944aa182ec33012c02d2a83e644641a03->enter($__internal_c5b40972c0a021d8bf750cdadf7e05c944aa182ec33012c02d2a83e644641a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_c5b40972c0a021d8bf750cdadf7e05c944aa182ec33012c02d2a83e644641a03->leave($__internal_c5b40972c0a021d8bf750cdadf7e05c944aa182ec33012c02d2a83e644641a03_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c84d3a0d6c4878f9c4e3ef508b63b4740699b7dd98028c8becfc2cc2f2db25c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84d3a0d6c4878f9c4e3ef508b63b4740699b7dd98028c8becfc2cc2f2db25c8->enter($__internal_c84d3a0d6c4878f9c4e3ef508b63b4740699b7dd98028c8becfc2cc2f2db25c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c84d3a0d6c4878f9c4e3ef508b63b4740699b7dd98028c8becfc2cc2f2db25c8->leave($__internal_c84d3a0d6c4878f9c4e3ef508b63b4740699b7dd98028c8becfc2cc2f2db25c8_prof);

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
", "@CookerCooking/Cook/contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\contact.html.twig");
    }
}

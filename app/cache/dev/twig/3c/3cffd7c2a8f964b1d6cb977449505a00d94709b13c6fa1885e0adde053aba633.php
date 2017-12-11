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
        $__internal_a7e091f1c8bd645e1e97e7137d79d9f551edee2c64eed743ed3d6ece07456ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e091f1c8bd645e1e97e7137d79d9f551edee2c64eed743ed3d6ece07456ef6->enter($__internal_a7e091f1c8bd645e1e97e7137d79d9f551edee2c64eed743ed3d6ece07456ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7e091f1c8bd645e1e97e7137d79d9f551edee2c64eed743ed3d6ece07456ef6->leave($__internal_a7e091f1c8bd645e1e97e7137d79d9f551edee2c64eed743ed3d6ece07456ef6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_563093cb07db98acf97415ee5a9fe85dd7069de4ac1a93826b45d68a15b4168a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563093cb07db98acf97415ee5a9fe85dd7069de4ac1a93826b45d68a15b4168a->enter($__internal_563093cb07db98acf97415ee5a9fe85dd7069de4ac1a93826b45d68a15b4168a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_563093cb07db98acf97415ee5a9fe85dd7069de4ac1a93826b45d68a15b4168a->leave($__internal_563093cb07db98acf97415ee5a9fe85dd7069de4ac1a93826b45d68a15b4168a_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_8816785bb535536b9bd736a47846666fa7c16e77a065fe0c16681c21dce68729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8816785bb535536b9bd736a47846666fa7c16e77a065fe0c16681c21dce68729->enter($__internal_8816785bb535536b9bd736a47846666fa7c16e77a065fe0c16681c21dce68729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8816785bb535536b9bd736a47846666fa7c16e77a065fe0c16681c21dce68729->leave($__internal_8816785bb535536b9bd736a47846666fa7c16e77a065fe0c16681c21dce68729_prof);

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

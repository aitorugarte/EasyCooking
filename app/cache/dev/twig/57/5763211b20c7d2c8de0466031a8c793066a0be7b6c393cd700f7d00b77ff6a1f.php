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
        $__internal_13052910f4a239e7051705c5b68c634051fa208fed3877065dcd8aa15f1f7da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13052910f4a239e7051705c5b68c634051fa208fed3877065dcd8aa15f1f7da1->enter($__internal_13052910f4a239e7051705c5b68c634051fa208fed3877065dcd8aa15f1f7da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13052910f4a239e7051705c5b68c634051fa208fed3877065dcd8aa15f1f7da1->leave($__internal_13052910f4a239e7051705c5b68c634051fa208fed3877065dcd8aa15f1f7da1_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_86af40c86ad36eaa2eb5509f3705e04876eb2aa4e21a8bb9ee9062dc96dec2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86af40c86ad36eaa2eb5509f3705e04876eb2aa4e21a8bb9ee9062dc96dec2bd->enter($__internal_86af40c86ad36eaa2eb5509f3705e04876eb2aa4e21a8bb9ee9062dc96dec2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_86af40c86ad36eaa2eb5509f3705e04876eb2aa4e21a8bb9ee9062dc96dec2bd->leave($__internal_86af40c86ad36eaa2eb5509f3705e04876eb2aa4e21a8bb9ee9062dc96dec2bd_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c16ae011bbe1bc833d77a8c4d23ca57e4ff78ba67468a2028baf70226543c518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16ae011bbe1bc833d77a8c4d23ca57e4ff78ba67468a2028baf70226543c518->enter($__internal_c16ae011bbe1bc833d77a8c4d23ca57e4ff78ba67468a2028baf70226543c518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contacta conmigo</h1>
    </header>

<form action=\"\" method=\"post\">
  <fieldset>
    <h4>Nombre</h4>
    <input type=\"text\" name=\"nombre\">
    
   <h4>Correo</h4>
    <input type=\"text\" name=\"correo\" size=\"10\" maxlength=\"9\">
  
    <h4>Mensaje</h4>
    <input type=\"text\" name=\"mensaje\" size=\"50\" style=\"height:50px\">
  </fieldset>

     <div class=\"button\">
        <button type=\"submit\">Enviar</button>
    </div>
   
</form>
";
        
        $__internal_c16ae011bbe1bc833d77a8c4d23ca57e4ff78ba67468a2028baf70226543c518->leave($__internal_c16ae011bbe1bc833d77a8c4d23ca57e4ff78ba67468a2028baf70226543c518_prof);

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

<form action=\"\" method=\"post\">
  <fieldset>
    <h4>Nombre</h4>
    <input type=\"text\" name=\"nombre\">
    
   <h4>Correo</h4>
    <input type=\"text\" name=\"correo\" size=\"10\" maxlength=\"9\">
  
    <h4>Mensaje</h4>
    <input type=\"text\" name=\"mensaje\" size=\"50\" style=\"height:50px\">
  </fieldset>

     <div class=\"button\">
        <button type=\"submit\">Enviar</button>
    </div>
   
</form>
{% endblock %}
", "CookerCookingBundle:Cook:contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/contact.html.twig");
    }
}

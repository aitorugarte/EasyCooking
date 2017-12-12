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
        $__internal_72baf80b80e8e6255e1085e7a912de206e0437d1a9aa358d22d8843e94eecb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72baf80b80e8e6255e1085e7a912de206e0437d1a9aa358d22d8843e94eecb3c->enter($__internal_72baf80b80e8e6255e1085e7a912de206e0437d1a9aa358d22d8843e94eecb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72baf80b80e8e6255e1085e7a912de206e0437d1a9aa358d22d8843e94eecb3c->leave($__internal_72baf80b80e8e6255e1085e7a912de206e0437d1a9aa358d22d8843e94eecb3c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_327297be712c3b95cb246af1aae393c0a480d8e2e03105758030953138cfed9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327297be712c3b95cb246af1aae393c0a480d8e2e03105758030953138cfed9e->enter($__internal_327297be712c3b95cb246af1aae393c0a480d8e2e03105758030953138cfed9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_327297be712c3b95cb246af1aae393c0a480d8e2e03105758030953138cfed9e->leave($__internal_327297be712c3b95cb246af1aae393c0a480d8e2e03105758030953138cfed9e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e527697501a0aaec902a819c07da3b0836d7d104019ae2671c5228c5ddaabd63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e527697501a0aaec902a819c07da3b0836d7d104019ae2671c5228c5ddaabd63->enter($__internal_e527697501a0aaec902a819c07da3b0836d7d104019ae2671c5228c5ddaabd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e527697501a0aaec902a819c07da3b0836d7d104019ae2671c5228c5ddaabd63->leave($__internal_e527697501a0aaec902a819c07da3b0836d7d104019ae2671c5228c5ddaabd63_prof);

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

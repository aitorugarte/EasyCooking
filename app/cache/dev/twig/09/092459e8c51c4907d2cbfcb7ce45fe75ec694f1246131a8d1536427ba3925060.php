<?php

/* CookerCookingBundle:Cook:contact.html.twig */
class __TwigTemplate_e874dfa570b88c66912cfe276c7decf6853a84163f4143ba2e935cf275b5398f extends Twig_Template
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
        $__internal_a5c2cd45b00728989a021d391ac3c42fe53e76472c33e6688fdf555ae07997d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c2cd45b00728989a021d391ac3c42fe53e76472c33e6688fdf555ae07997d0->enter($__internal_a5c2cd45b00728989a021d391ac3c42fe53e76472c33e6688fdf555ae07997d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5c2cd45b00728989a021d391ac3c42fe53e76472c33e6688fdf555ae07997d0->leave($__internal_a5c2cd45b00728989a021d391ac3c42fe53e76472c33e6688fdf555ae07997d0_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a4f5f5a77b8b616f9b9a29ccb1512f918acf09b74f092b7af4faae8f510a994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4f5f5a77b8b616f9b9a29ccb1512f918acf09b74f092b7af4faae8f510a994->enter($__internal_4a4f5f5a77b8b616f9b9a29ccb1512f918acf09b74f092b7af4faae8f510a994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_4a4f5f5a77b8b616f9b9a29ccb1512f918acf09b74f092b7af4faae8f510a994->leave($__internal_4a4f5f5a77b8b616f9b9a29ccb1512f918acf09b74f092b7af4faae8f510a994_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_7333c9fd82240198af8d8f237dc85d2d1d7c3a72f20ad10477df59033eb225d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7333c9fd82240198af8d8f237dc85d2d1d7c3a72f20ad10477df59033eb225d0->enter($__internal_7333c9fd82240198af8d8f237dc85d2d1d7c3a72f20ad10477df59033eb225d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7333c9fd82240198af8d8f237dc85d2d1d7c3a72f20ad10477df59033eb225d0->leave($__internal_7333c9fd82240198af8d8f237dc85d2d1d7c3a72f20ad10477df59033eb225d0_prof);

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
", "CookerCookingBundle:Cook:contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\contact.html.twig");
    }
}
